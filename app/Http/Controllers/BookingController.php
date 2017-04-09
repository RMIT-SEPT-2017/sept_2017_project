<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Booking;
use DateTime;
use DateInterval;
class BookingController extends Controller
{



    public function index()
    {
    	
		//$date = Input::get('date', false);
		//return($date);
        //$term = Input::get('term', false);


    	$bookings = Booking::all();
    	//return ($bookings);




    	return view('book')->with('bookings',$bookings);
    }	
    public function update()
    {	
    	//dummy data for bookings, will change to dynamic system in part be 
    	$timesArray = ['09:00AM','09:30AM','10:00AM','10:30AM','11:00AM','11:30AM','12:00PM','12:30PM','01:00PM','01:30PM','02:00PM','02:30PM','03:00PM','03:30PM','04:00PM','04:30PM'];
    	$dayList = ['Monday', 'Tues', 'Wed', 'Thur', 'Fri'];
    	$times;
    	for($j=0;$j<5;$j++){
	    	for($i=0;$i<16;$i++){
				$times[$j][$i] = true;
			}
		}
		$date = Input::get('date');
		$bookings = Booking::all();
		for($j=0;$j<5;$j++){
			foreach ($bookings as $booking) {	
				if($booking->date == $date){
					for($i=0;$i<16;$i++){
						if($booking->start==$timesArray[$i])$times[$j][$i] = false;
					}
				}
				
			}
			$date = date('Y-m-d', strtotime($date. ' + 1 days'));
		}
		$data = array(
			'times' => $timesArray,
			'days' => $times,
			'dayLabels' => $dayList
		);
		return view('book')->with($data);
    }	
}
