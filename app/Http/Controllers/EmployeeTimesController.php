<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Employee;
use App\EmployeeTime;
use Session;

class EmployeeTimesController extends Controller
{

    public function updateEmployeeTimes()
    {
        $id = Input::get('id');

        $dayArray = array('day0','day1','day2','day3','day4','day5', 'day6');
        $startArray = array('start0','start1','start2','start3','start4','start5', 'start6');
        $endArray = array('end0','end1','end2','end3','end4','end5', 'end6');
        if($this->checkEmployeeId($id)){
            DB::table('employeetimes')->where('empid', '=', $id)->delete();
            for($i=0;$i<7;$i++){
                $day = Input::get($dayArray[$i]);
                $start = Input::get($startArray[$i]);
                $end = Input::get($endArray[$i]);
                if($this->checkTimesMatch($start,$end)&&$this->checkTimes($start,$end)){
                    //&&$this->checkDate($date)^^
                    $employeeTime = new employeeTime;
                    $employeeTime->empid = $id;
                    $employeeTime->day = $i;
                    $employeeTime->start = $start;
                    $employeeTime->end = $end;
                    $employeeTime->save();
                    Session::flash('confirmationColor', "white");
                    Session::flash('confirmation', "Time successfully added.");
                }
            }
            return redirect('/add_employee_times');
        }
    }




    //static checking methods
    public static function checkTimesMatch($start,$end)
    {
        if(strtotime($end)<strtotime($start)){
            Session::flash('errorTimeColor', "white");
            Session::flash('errorTime', "A start time was after end time, that time was not added.");
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
    public static function checkDate($date)
    {
        if(strtotime($date) < strtotime('now')) return false;
        return true;
    }
}
