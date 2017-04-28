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
    	return redirect('booking');
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
    	
		$employeesNames = Employee::pluck('employee_name');
        $employeesIds = Employee::pluck('id');
        $data = array(
            'names' => $employeesNames,
            'ids' => $employeesIds,
        );
    	$admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    	return view('admin.employee_times')->with($data);
    	
    }
    
    public function viewEmployee()
    {
    	$admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    	$employeeTimes = DB::table('employeeTimes')
            ->join('employees', 'employees.id', '=', 'employeeTimes.empid')
            ->select('employee_name', 'day', 'start', 'end')
            ->get( );
        return view('admin.view_employees')->with('employeeTimes', $employeeTimes);
    }

    public function createService()
    {
    	$admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    	return view('admin.create_service');
    }
    
    public function bookings()
    {	
    	$admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    }	
}
