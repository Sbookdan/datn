<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    public function resetpass()
    {
        $users = User::all()->where('id', '=', Auth::user()->id);
        return view('auth.passwords.resetpasswordnew', compact('users'));
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'newPassword' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    public function updatepass(Request $request)
    {
        $users = User::all()->where('id', '=', Auth::user()->id);

            $users_from= array(
                            'password'  => Hash::make($request->newPassword),
                            'updated_at'=> Carbon::now(),
            );

            User::where('id', '=', Auth::user()->id)->update($users_from);
    
            return redirect('/profile/'.Auth::user()->id)->with('success_msg', 'Bạn Đã Thay Đổi Mật Khẩu Thành Công!!!');
    }
}
