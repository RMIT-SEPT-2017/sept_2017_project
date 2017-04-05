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
    	return ($bookings);




    	//return view('book')->with('bookings',$bookings);
    }	
    public function update()
    {	
    	$timesArray = ['9:00AM','9:30AM','10:00AM','10:30AM','11:00AM','11:30AM','12:00PM','12:30PM','1:00PM','1:30PM','2:00PM','2:30PM','3:00PM','3:30PM','4:00PM','4:30PM'];
    	$times;
    	for($i=0;$i<16;$i++){
			$times[$i] = true;
		}
		$date = Input::get('date');
		$bookings = Booking::all();
		foreach ($bookings as $booking) {
			if($booking->date == $date){
				for($i=0;$i<16;$i++){
					if($booking->time==$timesArray[$i])$times[$i] = false;
				}
			}
				
		}
		$data = array(
			'times' => $timesArray,
			'availableTimes' => $times
		);
		return view('book')->with($data);
    }	
}
