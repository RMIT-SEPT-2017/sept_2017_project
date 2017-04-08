<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;
use App\Employee;
use App\EmployeeTime;
use App\Booking;
use DB;
class AdminController extends Controller
{
    public function index()
    {
    	
		$admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
        //join the databases
        $bookings = DB::table('bookings')
            ->join('users', 'users.id', '=', 'bookings.custid')
            ->get();
        return $bookings;
    	return view('admin.home')->with(Booking::all());
    }
    public function logoutUser(){
        Auth::logout();
        return redirect('home');
    }

    public function createEmployee()
    {
    	
		
    	$admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    	return view('admin.create_employee');
    }
    public function employeeTimes()
    {
    	
		
    	$admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    	return view('admin.employee_times');
    	
    }
    public function bookings()
    {	
    	$admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    }	
}
