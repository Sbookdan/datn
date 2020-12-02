<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\pay;
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

    public function checkout()
    {
        return view('cart.payment');
    }
    public function momo(Request $request)
    {
        
    }
}
