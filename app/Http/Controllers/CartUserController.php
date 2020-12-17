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
use Carbon\Carbon;

class CartUserController extends Controller
{
    public function addtoCart(Request $request)
    {
        $product = Product::find($request->id);

        $cart = array(
            'cart_product_id' => $product->id,
            'number' => 1,
            'cart_user_id' => auth()->user()->id,
            'price' => $product->price,
        );
        Cart::create($cart);
        return redirect()->route('products')->with('success_msg', 'Bạn Đã Thêm Sản Phẩm Vào Giỏ Hàng!!!');
    }
    public function cart(Request $request)
    {
        $pay = pay::all();
        $products = Product::where("sale", '>=', 50)->orderBy('id')->take(6)->get();
        $carts = DB::table('cart')
                ->join('products', 'products.id', '=', 'cart.cart_product_id')
                ->join('users', 'users.id', '=', 'cart.cart_user_id')
                ->select(
                    'cart.*',
                    'products.id as product_id',
                    'products.name as product_name',
                    'products.price as product_price',
                    'products.avatar as product_avatar',
                    'products.sale as product_sale',
                )
                ->where('cart_user_id', '=', auth()->user()->id)
                ->get();

        $this->carts['carts'] = $carts;

        return view('cart.cartpay',compact('pay','products'), $this->carts);
    }
    
    public function remove(Request $request)
    {
        $cart = Cart::find($request->id);
        $cart ->delete($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Bạn Đã Xóa Sản Phẩm');
    }
    // .....
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

    public function checkout(Request $request, $id)
    {
        $cart_update = array(
            'number'        => $request->input('number_before'),
            'updated_at'    => Carbon::now(),
        );

        Cart::where('id', '=', $id)->update($cart_update);

        $shipping_fee = shipping_fee::all();
        $payment_methods = payment_methods::all();
        $totalproduct = cart::all();

        $detal_cart = DB::table('pay')
                        ->join('cart', 'cart.id', '=', 'pay.pay_cart_id')
                        ->select(
                            'pay.*',
                            'cart.number as cart_number',
                            'cart.price as cart_price',
                        )
                        ->get();

        $this->detal_cart['detal_cart'] = $detal_cart;

        return view('cart.payment', compact('shipping_fee', 'payment_methods','totalproduct'),$this->detal_cart);
    }
    public function paycart(Request $request)
    {
        $payment_methods = payment_methods::find($request->id);
        $cart = Cart::find($request->id);

        $total_price_cart = $request->total_all;
        $tid_cart_pay = $request->id_cart;

        $form_payment = array(
            'pay_payment_methods_id'    => $payment_methods->id,
            'pay_user_id'               => auth()->user()->id,
            'total'                     => $total_price_cart,
            'pay_cart_id'               => $tid_cart_pay,
            'updated_at' => Carbon::now(),
        );
        pay::where('cart_user_id', '=', auth()->user()->id)->create($form_payment);

        return redirect()->route('products')->with('success_msg', 'Bạn Đã Thanh Toán Thành Công!!!');
    }
}