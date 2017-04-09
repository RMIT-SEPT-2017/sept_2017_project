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
            ->join('users', 'users.id', '=', 'bookings.user_id')
            ->join('employees', 'employees.id', '=', 'bookings.employee_id')
            ->select('name', 'date', 'start', 'end', 'employee_name')
            ->get( );
        
    	return view('admin.home')->with('bookings',$bookings);
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
