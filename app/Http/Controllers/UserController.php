<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}

	public function dashboard(){
		if(auth()->check()){
            $user = auth()->user();
          }
	}

	public function profileUser() 
	{
		$users = User::all()->where('id' ,'=', Auth::user()->id);
		return view('users.profile',compact('users'));
	}

}
