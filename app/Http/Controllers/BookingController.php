<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Event;
use DateTime;
use DateInterval;
class BookingController extends Controller
{



    public function index()
    {
    	$bookings = Event::all();
		
    	return view('booking.booking')->with('bookings',$bookings);
    }	
}
