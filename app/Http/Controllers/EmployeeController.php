<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Employee;
use App\EmployeeTime;
use DB;
use Session;

class EmployeeController extends Controller
{
    public function updateEmployees()
    {


    	$name = Input::get('name');
    	$email = Input::get('email');
    	if($this->checkName($name)&&$this->checkEmail($email)&&$this->checkDuplicate($email)&&$this->checkNameNull($name)){
	    	$employee = new employee;
	        $employee->employee_name = $name;
	        $employee->email = $email;
	        $employee->save();
          Session::flash('confirmationColor', "white");
          Session::flash('confirmation', "Employee successfully added");
	    }
        return redirect('/create_employee');
    }



    public static function checkName($name)
    {
        if (!preg_match('/^([^0-9!@#$%^&*()_+=]*)$/', $name)){
          Session::flash('confirmationColor', "white");
          Session::flash('confirmation', "Employee not added, name is invalid");
          return false;
        }
        return true;
    }

    public static function checkEmail($email)
    {
        if (!preg_match('/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/', $email))
        {
          Session::flash('confirmationColor', "white");
          Session::flash('confirmation', "Employee not added, email is invalid");
          return false;
        }
        return true;
    }

    public static function checkNameNull($name){
        if ($name == "") {
          Session::flash('confirmationColor', "white");
          Session::flash('confirmation', "Employee not added, name is invalid");
          return false;
        }
        return true;
    }

    public static function checkDuplicate($email)
    {
        $employees = DB::table('employees')->where('email', $email)->get();
        foreach ($employees as $employees) {
            Session::flash('confirmationColor', "white");
            Session::flash('confirmation', "Employee not added, email already in use");
            return false;
        }
        return true;
    }
}
