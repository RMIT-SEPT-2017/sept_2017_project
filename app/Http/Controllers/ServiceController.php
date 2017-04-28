<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    public function updateServices()
    {
    	$title = Input::get('title');
    	$duration = Input::get('duration');
    	if($this->checkName($title)&&$this->checkDuration($duration)){
	    	$service = new service;
	        $service->title = $title;
	        $service->duration = $duration;
	        $service->save();
	    } 
        return redirect('/create_service');
    }

    public static function checkName($name)
    {
        if (!preg_match('/^([^0-9!@#$%^&*()_+=]*)$/', $name))return false;
        return true;
    }

    public static function checkDuration($duration)
    {
        if (!is_numeric($duration))return false;
        return true;
    }
}
