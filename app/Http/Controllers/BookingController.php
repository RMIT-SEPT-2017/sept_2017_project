<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
        if($user = Auth::user())
        {
            $admin = Auth::user()->admin;
        	if(!$admin){ 
        		return view('booking.booking')->with($data);
        	}
        	return view('booking.booking_admin')->with($data);
        }
        return redirect('home');
    }	
    public function addBooking(){


        date_default_timezone_set('Australia/Melbourne'); //sets time to melbourne
    	$service = Input::get('service_id');
    	$emp = Input::get('employee_id');
    	$cust = Input::get('customer_id');
    	$date = Input::get('date');
        $time = Input::get('time');
        $start = $date.' '.$time.':00';

    	$duration = DB::table('services')->where('id', $service)->value('duration');
		$end = new DateTime($start);


        if (is_numeric($duration)) {
    		$end->add(new DateInterval('PT' . $duration . 'M'));
        }
        else return false;

		$end = $end->format('Y-m-d H:i:s');
        $today = date("Y-m-d H:i:s");

        
		//check if data is past current
        //check if time is past current
        if($start<$today){
            echo 'stop here';
            return redirect('booking?error=InPast');
        }
        //check if employee availible 
        $dayofweek = date('w', strtotime($date));
        $emp_start = DB::table('employeetimes')->where('empid', $emp)->where('day', $dayofweek)->value('start');
        $emp_end = DB::table('employeetimes')->where('empid', $emp)->where('day', $dayofweek)->value('end');
        $emp_start_date = $date.' '.$emp_start.':00';
        $emp_end_date = $date.' '.$emp_end.':00';

        echo $start.'<br>';
            echo $end.'<br>';
            echo $emp_start_date.'<br>';
            echo $emp_end_date.'<br>';
        if($start<$emp_start_date||$start>$emp_end_date||$end>$emp_end_date){
            return redirect('booking?error=EmployeeNotAvailable');
        }
        //check if overlap of bookings for employee
    	$bookings = DB::table('events')->where('employee_id', $emp)->whereDate('estart',$date)->get();
        //$bookings = Event::All();
        foreach ($bookings as $booking) {
            if($booking->estart <= $start&&$start < $booking->eend){
                echo "start overlap wwith".$booking->id;
                return redirect('booking?error=Overlap');
            }
            if($booking->estart < $end&&$end <= $booking->eend){
                echo "end overlap wwith".$booking->id;
                return redirect('booking?error=Overlap');
            }
            if($start <= $booking->estart&&$booking->estart < $end){
                echo "start overlap wwith".$booking->id;
                return redirect('booking?error=Overlap');
            }
        }
        
    	$event = new event;
	        $event->service_id = $service;
	        $event->employee_id = $emp;
	        $event->customer_id = $cust;
	        $event->estart = $start;
	        $event->eend = $end;
	        $event->save();
	        return redirect('booking');
   	}
}
