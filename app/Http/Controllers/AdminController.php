<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;
use App\Employee;
class AdminController extends Controller
{
    public function index()
    {
    	
		
    	$admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    	return view('admin.home');
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

    	
    }
    public function bookings()
    {
    	
		
    	$admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    }	
    public function updateEmployees()
    {


    	$name = Input::get('name');
    	$email = Input::get('email');
    	$employee = new employee;
        $employee->name = $name;
        $employee->email = $email;
        $employee->save();
		
    	
    }
    
}
