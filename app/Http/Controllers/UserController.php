<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function dashboard()
	{
		if (auth()->check()) {
			$user = auth()->user();
		}
	}

	public function profileUser()
	{
		$users = User::all()->where('id', '=', Auth::user()->id);
		return view('users.profile', compact('users'));
	}
	public function edit(User $users, $id)
	{
		$users = User::all()->where('id', '=', $id);
		return view('users.edit', compact('users'));
	}
	public function update(Request $request, $id)
	{
		$image_name = $request->hidden_image;
		$avatar = $request->file('avatar');

		if ($avatar != '') {
			$request->validate([
				'name'      => 'required',
				'email'     => 'required|email',
				'phone'     => 'required|min:10|max:10',
				'address'   => 'required',
				'avatar'    => 'image|max:2048'
			]);

			$image_name = rand() . '.' . $avatar->getClientOriginalExtension();
			$avatar->move(public_path('img/user'), $image_name);
		} else {
			$request->validate([
				'name'      => 'required',
				'email'     => 'required|email',
				'phone'     => 'required|min:10|max:10',
				'address'   => 'required'
			]);
		}

		$form_data = array(
			'name'      => $request->input('name'),
			'email'     => $request->input('email'),
			'phone'     => $request->input('phone'),
			'address'   => $request->input('address'),
			'avatar'    => $image_name,
			'updated_at' => Carbon::now(),
		);

		User::where('id', '=', $id)->update($form_data);

		return redirect('/profile')->with('success', 'Data is successfully updated');
	}
}
