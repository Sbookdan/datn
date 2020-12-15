<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class cartController extends Controller
{
    public function index()
    {
        $ds = Cart::all();
        return view('admin.cart.index', compact('ds'));
    }

    public function show($id)
    {
        //
    }
    public function destroy($id)
    {
        $tl = Cart::find($id);
        $tl->delete();
        return redirect('/cartuser')->with('success', 'Đã xóa xong');
    }
}
