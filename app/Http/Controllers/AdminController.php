<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\User;
use App\Employee;
use App\EmployeeTime;
class AdminController extends Controller
{
    public function index()
    {
    	
		
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
    	return view('admin.employee_times');
    	
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


    public function updateEmployeeTimes()
    {


        $id = Input::get('id');

        $dateArray = array('date1','date2','date3','date4','date5');
        $startArray = array('start1','start2','start3','start4','start5');
        $endArray = array('end1','end2','end3','end4','end5');


        for($i=0;$i<5;$i++){



            $date = Input::get($dateArray[$i]);
            $start = Input::get($startArray[$i]);
            $end = Input::get($endArray[$i]);

            if($this->checkTimes($start,$end)){
                $employeeTime = new employeeTime;
                $employeeTime->empid = $id;
                $employeeTime->date = $date;
                $employeeTime->start = $start;
                $employeeTime->end = $end;
                $employeeTime->save();
            }
        }
        echo "okay";
    }
    public function checkTimes($start,$end)
    {
        if(strtotime($end)<strtotime($start)){
            echo "error";
            return false;
        }
        else return true;
    }
}
