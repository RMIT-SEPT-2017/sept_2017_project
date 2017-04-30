<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Service;
use DB;
class ServiceController extends Controller
{
    public function updateServices()
    {
    	$title = Input::get('title');
    	$duration = Input::get('duration');
    	$color = Input::get('color');

        

    	if($this->checkDuration($duration)&&$this->checkTitle($title)){
	    	$service = new service;
	        $service->title = $title;
	        $service->duration = $duration;
            $service->color = $color;
	        $service->save();
	    } 
        return redirect('/confirm_service');
    }

    public static function checkDuration($duration)
    {
        
        if (!is_numeric($duration))return false;
        return true;
    }
    public static function checkTitle($title)
    {
        $services = DB::table('services')->where('title', $title)->get();
        foreach ($services as $service) {
            return false;
        }
        return true;
    }
}
