<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Employee;
use App\EmployeeTime;

class EmployeeTimesController extends Controller
{
    
    public function updateEmployeeTimes()
    {


        $id = Input::get('id');

        $dayArray = array('day1','day2','day3','day4','day5');
        $startArray = array('start1','start2','start3','start4','start5');
        $endArray = array('end1','end2','end3','end4','end5');
        if($this->checkEmployeeId($id)){
            DB::table('employeetimes')->where('empid', '=', $id)->delete();
            for($i=0;$i<5;$i++){
                $day = Input::get($dayArray[$i]);
                $start = Input::get($startArray[$i]);
                $end = Input::get($endArray[$i]);
                if($this->checkTimesMatch($start,$end)&&$this->checkTimes($start,$end)){
                    //&&$this->checkDate($date)^^
                    $employeeTime = new employeeTime;
                    $employeeTime->empid = $id;
                    $employeeTime->day = $i+1;
                    $employeeTime->start = $start;
                    $employeeTime->end = $end;
                    $employeeTime->save();
                }
            }
            return redirect('/confirm_employee_times');
        }
    }




    //static checking methods
    public static function checkTimesMatch($start,$end)
    {
        if(strtotime($end)<strtotime($start)){
            return false;
        }
        else return true;
    }
    public static function checkTimes($start,$end)
    {
        if ( !preg_match('/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/', $start))return false;
        if ( !preg_match('/^([0-9]|0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/', $end))return false;
        return true;
    }

    public static function checkEmployeeId($id)
    {
        $employees = Employee::all();
        foreach ($employees as $employee) {
            if($employee->id==$id)return true;
        }
        return false;
    }
<<<<<<< HEAD
    public static function checkDate($date)
    {
        if(strtotime($date) < strtotime('now')) return false;
        return true;
    }
=======

//    public static function checkDate($date)
//    {
//        if(strtotime($date) < strtotime('now')) return false;
//        return true;
//    }
>>>>>>> ea13bc4c3448da1c2640c541f8ed0286ba789663
}
