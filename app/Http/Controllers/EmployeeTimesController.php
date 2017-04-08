<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Employee;
use App\EmployeeTime;

class EmployeeTimesController extends Controller
{
    public function updateEmployeeTimes()
    {


        $id = Input::get('id');

        $dateArray = array('date1','date2','date3','date4','date5');
        $startArray = array('start1','start2','start3','start4','start5');
        $endArray = array('end1','end2','end3','end4','end5');
        if($this->checkEmployeeId($id)){
            for($i=0;$i<5;$i++){
                $date = Input::get($dateArray[$i]);
                $start = Input::get($startArray[$i]);
                $end = Input::get($endArray[$i]);
                if($this->checkTimesMatch($start,$end)&&$this->checkTimes($start,$end)&&$this->checkDate($date)){
                    $employeeTime = new employeeTime;
                    $employeeTime->empid = $id;
                    $employeeTime->date = $date;
                    $employeeTime->start = $start;
                    $employeeTime->end = $end;
                    $employeeTime->save();
                }
            }
        }
        echo "okay";
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
    public static function checkDate($date)
    {
        if(strtotime($date) < strtotime('now')) return false;
        return true;
    }
}
