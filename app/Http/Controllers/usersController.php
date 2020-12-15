<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Auth;
use App\Models\level;

class usersController extends Controller
{
    public function index() {
        $ds = users::all();
        return view('admin.users.index', compact('ds'));
    } 
    public function create() {
        return view('admin.users.create');
    }
    
    public function store(Request $request) {
        $t = new users([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'avatar' => $request->get('avatar'),
            'password' => bcrypt($request->get('password')),
            'address' => $request->get('address'),
            'role' => $request->get('role'),
            ]);
        $t->save();
        return redirect('users')->with('success','Tài khoản được lưu');			
    }
    
    
    public function show($id) {
        //
    }
    public function edit($id) {
        $row = users::find($id);
        return view('admin.users.edit',compact('row'));
    }
    public function update(Request $request, $id) {
        $t = users::find($id);
        $t->name = $request->get('name');
        $t->email = $request->get('email');
        $t->phone = $request->get('phone');
        $t->address = $request->get('address');
        $t->save();
        return redirect('users/edit/'.$id)->with('success','Cập nhật Tài khoản thành công!');
    }
    public function destroy($id)
    {
      $tl = users::find($id);
      $tl->delete();
      return redirect('/users')->with('success', 'Đã xóa xong');

    }
    public function tkupdate($id,$role) {
        $tl = users::find($id);
        $tl->role =$role;
        $tl->save();
        return redirect('/users')->with('success','Đã cập nhật!');
    }
}
