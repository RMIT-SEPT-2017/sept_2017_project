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

    public function viewServices()
    {
        $admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
        $services = DB::table('services')
            ->select('title', 'duration', 'color')
            ->get( );
        return view('admin.create_service')->with('services', $services);
    }

    public function bookings()
    {
    	$admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    }

    public function confirmService()
    {
    	$admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    	return view('admin.confirm_service');
    }

    public function confirmEmployeeTimes()
    {
    	$admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    	return view('admin.confirm_employee_times');
    }

    public function viewBusinesses()
    {
      $admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    	return view('admin.create_business');
    }

    public function confirmBusiness()
    {
      $admin = Auth::user()->admin;
      if(!$admin){
        return redirect('home');
      }
      return view('admin.confirm_business');
    }
    public function viewBusinessTimes()
    {
      $admin = Auth::user()->admin;
    	if(!$admin){
    		return redirect('home');
    	}
    	return view('admin.create_business_times');
    }

    public function confirmBusinessTimes()
    {
      $admin = Auth::user()->admin;
      if(!$admin){
        return redirect('home');
      }
      return view('admin.confirm_business');
    }
}
