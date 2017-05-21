<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
// use App\Employee;
// use App\EmployeeTime;
use App\Business;
use DB;

class BusinessController extends Controller
{
    public function updateBusinesses()
    {
    	$name = Input::get('name');
<<<<<<< HEAD
        DB::table('business')
            ->where('id', 1)
            ->update(array(
                'street_number' => Input::get('street_number'),
                'route' => Input::get('route'),
                'locality' => Input::get('locality'),
                'administrative_area_level_1' => Input::get('administrative_area_level_1'),
                'postal_code' => Input::get('postal_code'),
                'country' => Input::get('country'),
                'colorBanner' => Input::get('colorPrimary'),
                'colorBorder' => Input::get('colorSeconary'),
                'name' => Input::get('name')));
=======
        $color = Input::get('color');
    	
        // if($this->checkName($name)&&$this->checkEmail($email)){
	   $business = new business;
	   $business -> business_name = $name;
       $business -> color = $color;
	   $business -> save();
>>>>>>> 01b4450fc2208795470f3b0a9cc7f52c0528b4e8
	    // }
        return redirect('/confirm_business');
    }

    public function index()
    {
        $title = DB::select('select * from business where id = ?', [1])[0];
        
        $business = DB::table('business')
            ->join('businesstimes', 'business.id', '=', 'businesstimes.busid')
            ->select('day', 'start', 'end')
            ->where('id', '=', 1)
            ->get();
        
        
        return view('business')
            ->with('business', $business)
            ->with('title', $title);
    }
     



    // public static function checkName($name)
    // {
    //     if (!preg_match('/^([^0-9!@#$%^&*()_+=]*)$/', $name))return false;
    //     return true;
    // }
}
