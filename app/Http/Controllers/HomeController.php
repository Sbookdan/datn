<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cart;

use App\Http\Requests\Createrequest;


use Cache;


use Carbon\Carbon;


use Laravel\Socialite\Facades\Socialite;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
