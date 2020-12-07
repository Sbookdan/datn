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
    public function cart()  {
        $cartCollection = \Cart::getContent();
        // dd($product = Product::where('id', '=', 1));
        return view('cart.cartpay')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }
    public function pay()
    {
        return view('cart.paymenber.pay');
    }
    public function add(Request $request)
    {
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'avatar' => $request->img
            )
        ));
        return redirect()->route('products')->with('success_msg', 'Bạn Đã Thêm Sản Phẩm Vào Giỏ Hàng!!!');
    }
    public function remove(Request $request)
    {
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Bạn Đã Xóa Sản Phẩm');
    }

    public function update(Request $request)
    {
        \Cart::update(
            $request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
            )
        );
        return redirect()->route('cart.index')->with('success_msg', 'Cập Nhật Giỏ Hàng Thành Công');
    }
    public function clear()
    {
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Bạn Đã Xóa Hết Sản Phẩm Trong Giỏ Hàng');
    }
}
