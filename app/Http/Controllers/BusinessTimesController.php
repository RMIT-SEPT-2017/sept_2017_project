<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Business;
use App\BusinessTime;
use Session;

class BusinessTimesController extends Controller
{

    public function updateBusinessTimes()
    {
        $dayArray = array('day0','day1','day2','day3','day4','day5', 'day6');
        $startArray = array('start0','start1','start2','start3','start4','start5', 'start6');
        $endArray = array('end0','end1','end2','end3','end4','end5', 'end6');
        DB::table('businesstimes')->where('bid', '=', 1)->delete();
        for($i=0;$i<7;$i++){
            $day = Input::get($dayArray[$i]);
            $start = Input::get($startArray[$i]);
            $end = Input::get($endArray[$i]);
            if($this->checkTimesMatch($start,$end)&&$this->checkTimes($start,$end)){
                $businessTime = new BusinessTime;
                $businessTime->bid = 1;
                $businessTime->day = $i;
                $businessTime->start = $start;
                $businessTime->end = $end;
                $businessTime->save();
                Session::flash('confirmationColor', "white");
                Session::flash('confirmation', "Business times successfully added.");
            }
        }
        return redirect('/create_business_times');
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

    public static function checkDate($date)
    {
        if(strtotime($date) < strtotime('now')) return false;
        return true;
    }
}
