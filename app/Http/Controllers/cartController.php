<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;

class cartController extends Controller
{
    public function index() {
        $ds = cart::all();
        return view('admin.cart.index', compact('ds'));
    }
    
    public function show($id) {
        //
    }
    public function destroy($id)
    {
      $tl = cart::find($id);
      $tl->delete();
      return redirect('/cart')->with('success', 'Đã xóa xong');

    }
}
