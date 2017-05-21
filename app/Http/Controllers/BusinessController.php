<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
// use App\Employee;
// use App\EmployeeTime;
use DB;
protected $title;

class BusinessController extends Controller
{
    public function updateBusinesses()
    {
    	$name = Input::get('name');
      $color = Input::get('color');
    	// if($this->checkName($name)&&$this->checkEmail($email)){
	    	  $business = new business;
	        $business -> business_name = $name;
          $business -> color = $color;
	        $business -> save();
	    // }
        return redirect('/confirm_business');
    }

    public function index()
    {
        $title = DB::select('select name from business where id = ?', [1]);
        $locale = DB::select('select location from business where id = ?', [1]);
        $business = DB::table('business')
            ->join('businesstimes', 'business.id', '=', 'businesstimes.busid')
            ->select('day', 'start', 'end')
            ->where('id', '=', 1)
            ->get();
        
        
        return view('business')
            ->with('business', $business)
            ->with('title', $title)
            ->with('locale', $locale);
    }
    



    // public static function checkName($name)
    // {
    //     if (!preg_match('/^([^0-9!@#$%^&*()_+=]*)$/', $name))return false;
    //     return true;
    // }
}
