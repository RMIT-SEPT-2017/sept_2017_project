<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Event;
use App\Service;
use App\Employee;
use App\User;
use DateTime;
use DateInterval;
use DB;
class BookingController extends Controller
{



    public function index()
    {
    	$services = Service::all();
		$employees = Employee::all();
		$customers = User::all();
    	$bookings = DB::table('events')
            ->join('users', 'users.id', '=', 'events.customer_id')
            ->join('employees', 'employees.id', '=', 'events.employee_id')
            ->join('services', 'events.service_id', '=', 'services.id')
            ->select('events.id','services.title', 'color', 'estart', 'eend','name','employee_name')
            ->get( );



         $data = array(
		    'bookings'  => $bookings,
		    'services'   => $services,
		    'employees' => $employees,
		    'customers' => $customers
		);
    	return view('booking.booking')->with($data);
    }	
    public function addBooking(){
    	$service = Input::get('service_id');
    	$emp = Input::get('employee_id');
    	$cust = Input::get('customer_id');
    	$start = Input::get('start');

    	$minutes_to_add = 5;

$time = new DateTime('2011-11-17 05:05');
$time->add(new DateInterval('PT' . $minutes_to_add . 'M'));

$stamp = $time->format('Y-m-d H:i');
    	
    	$event = new event;
	        $event->service_id = $service;
	        $event->employee_id = $emp;
	        $event->customer_id = $cust;
	        $event->color = 0;
	        $event->estart = $start;
	        $event->eend = $end
	        $event->save();
   	}
}
