<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\shipping_fee;
use App\Models\pay;
use App\Models\payment_methods;
use App\Models\cart;
use Illuminate\Support\Facades\Input;

class CartUserController extends Controller
{
    public function addtoCart(Request $request)
    {
        $product = Product::find($request->id);

        $cart = array(
            'cart_product_id' => $product->id,
            'number' => 1,
            'cart_user_id' => auth()->user()->id,
            'total'
        );
        Cart::create($cart);
        return redirect()->route('products')->with('success_msg', 'Bạn Đã Thêm Sản Phẩm Vào Giỏ Hàng!!!');
    }
    public function cart(Request $request)
    {
        $products = Product::find($request->id);
        $carts = DB::table('cart')
                ->join('products', 'products.id', '=', 'cart.cart_product_id')
                ->join('users', 'users.id', '=', 'cart.cart_user_id')
                ->select(
                    'cart.*',
                    'products.id as product_id',
                    'products.name as product_name',
                    'products.price as product_price',
                    'products.avatar as product_avatar'
                )
                ->where('cart_user_id', '=', auth()->user()->id)
                ->get();
        if (Auth::user()->id) {
            $total = DB::table('cart')
                        ->sum('number')* 60;
            // if($carts->cart_product_id == $products->id) {
            //     $total = $carts->product_price * $carts->number;
            // }
        }
        $this->carts['carts'] = $carts;
        $this->total['total'] = $total;

        return view('cart.cartpay', $this->carts, $this->total);
    }
    
    public function remove(Request $request)
    {   
        $cart = Cart::find($request->id);
        $cart ->delete($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Bạn Đã Xóa Sản Phẩm');
    }
// .....
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
// .....
    public function checkoutupdate(Request $request)
    {
        $carts = DB::table('cart')
                ->join('products', 'products.id', '=', 'cart.cart_product_id')
                ->select(
                    'cart.*',
                    'products.id as product_id',
                )
                ->where('cart_user_id', '=', auth()->user()->id)
                ->get();
        if ($carts != 1) {
            $form_update = array(
                'number' => $request->get('number'),
            );
        }
        dd($form_update);
        Cart::where('cart_user_id', '=', auth()->user()->id)->update($form_update);

        return redirect()->with('success_msg', 'Bạn Đã Cập Nhật Sản Phẩm Thành Công!!!');
    }

    public function checkout(Request $request)
    {
        $shipping_fee = shipping_fee::all();
        $payment_methods = payment_methods::all();
        $carts = DB::table('cart')
                ->join('products', 'products.id', '=', 'cart.cart_product_id')
                ->select(
                    'cart.*',
                    'products.id as product_id',
                    'products.price as product_price'
                )
                ->where('cart_user_id', '=', auth()->user()->id)
                ->get();

        if (Auth::user()->id) {
            $totalproduct = DB::table('cart')
                        ->sum('number');
            // if($cart->)
        }
        $this->totalproduct['totalproduct'] = $totalproduct;

        return view('cart.payment', compact('shipping_fee', 'payment_methods'), $this->totalproduct);
    }
    public function paycart(Request $request)
    {
        $payment_methods = payment_methods::find($request->id);
        $cart = Cart::find($request->id);
        $payment = DB::table('pay')
                    ->join('cart', 'cart.id' , '=' , 'pay.pay_cart_id')
                    ->join('users', 'users.id', '=', 'pay.pay_user_id')
                    ->join('payment_methods' , 'payment_methods.id' , '=', 'pay.pay_payment_methods_id')
                    ->join('shipping_fee', 'shipping_fee.id', '=' , 'pay.pay_shipping_fee_id')
                    ->select(
                        'pay.*',
                        'cart.id as cart_id',
                        'shipping_fee.id as shipping_fee_id',
                        'payment_methods.id as payment_methods_id',
                        'users.id as user_id'
                    )
                    ->where('cart_user_id', '=', auth()->user()->id)
                    ->get();
        $form_payment = array(
            'pay_payment_methods_id' => $payment_methods->id,
            'pay_user_id' => auth()->user()->id,
        );
        pay::where('cart_user_id', '=', auth()->user()->id)->create($form_payment);

        return redirect()->route('products')->with('success_msg', 'Bạn Đã Thanh Toán Thành Công!!!');
    }
}
