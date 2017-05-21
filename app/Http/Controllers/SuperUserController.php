<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use DB;
class SuperUserController extends Controller
{
    public function index()
    {

		$admin = Auth::user()->admin;
    	if(!$admin==2){
    		return redirect('home');
    	}
        $users = User::all();
        return view('admin.site_control')->with('users', $users);
    }
    public function updateControl()
    {

		$admin = Auth::user()->admin;
    	if(!$admin==2){
    		return redirect('home');
    	}

    	$id = Input::get('id');
    	echo $id;
       	DB::table('users')
            ->where('id', $id)
            ->update(array('admin' => 1));

        $users = User::all();
        return view('admin.site_control')->with('users', $users);
    }
}
