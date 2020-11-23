<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class ResetPasswordnewController extends Controller
{
    protected function showResetnewForm(User $users, $id)
    {
        $users = User::all()->where('id', '=', $id);
        return view('auth.passwords.resetpasswordnew', compact('users'));
    }
    public function update(Request $request, $id)
    {
        
        $form_data = array(
                            'newPassword'  => Hash::make($request->newPassword),
                            'updated_at'=> Carbon::now(),
            );
      
        User::where('id', '=', $id)->update($form_data);
    
        return redirect('/')->with('success', 'Data is successfully updated');
    }
}
