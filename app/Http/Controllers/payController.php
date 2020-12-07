<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pay;
use App\Models\cart;
use App\Models\Product;
use App\Models\shipping_fee;
use Illuminate\Support\Facades\DB;
use App\Models\payment_methods;

class payController extends Controller
{
    public function index() {
        $ds = pay::all();
        return view('admin.pay.index', compact('ds'));
    }
    
    public function show($id) {
        //
    }
    public function destroy($id)
    {
      $tl = pay::find($id);
      $tl->delete();
      return redirect('/pay')->with('success', 'Đã xóa xong');

    }
    public function paytheocart($pay_user_id,$pageNum=1){
        $ds = pay::find($pay_user_id);
        return view("admin.pay.paytheocart");
    }
    public function tkup($id,$token) {
        $tl = pay::find($id);
        $tl->token =$token;
        $tl->save();
        return redirect('/pay')->with('success','Đã cập nhật!');
    }

    // user

    public function checkout(Request $request)
    {
        // $cart = new cart();
        // $product = new product();
        $shipping_fee = shipping_fee::all();

        // $cart->cart_product_id = $product->id;
        // $cart->cart_user_id = auth()->user()->id;
        // $cart->cart_shipping_fee_id = $shipping_fee->id;
        // $cart->number = $request->number;
        // $cart->total = $request->total;

        // $cart->save();

        return view('cart.payment',compact('shipping_fee'));
    }

    public function momo(Request $request)
    {
        
    }
}
