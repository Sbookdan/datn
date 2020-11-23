<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\publisher;
use App\Models\attached;
use App\Models\sale;

class productsController extends Controller
{
    public function index() {
        $ds = products::all();
        return view('admin.products.index', compact('ds'));
    }   
    public function create() {
        $publisher = publisher::all();
        $attached = attached::all();
        $sale = sale::all();
        return view('admin.products.create',compact('publisher','attached','sale'));
    }
    public function edit($id) {
        $row = products::find($id);
        return view('admin.products.edit',compact('row'));
    }
    public function store(Request $request) {
        $t = new products([
            'name' => $request->get('name'),
            'pro_att_id' => $request->get('pro_att_id'),
            'price' => $request->get('price'),
            'author' => $request->get('author'),
            // 'total_sale' => $request->get('total_sale'),
            'pro_pub_id' => $request->get('pro_pub_id'),
            'sale' => $request->get('sale'),
            'description' => $request->get('description'),
            'avatar' => 'upload/'.$request->get('avatar'),
            ]);
           
        $t->save();
        return redirect('products')->with('success','Tài khoản được lưu');			
    }
    
    
    public function show($id) {
        //
    }
    public function update(Request $request, $id) {
        $t = products::find($id);
        $t->name = $request->get('name');
        $t->pro_att_id = $request->get('pro_att_id');
        $t->price = $request->get('price');
        $t->author = $request->get('author');
        $t->pro_pub_id = $request->get('pro_pub_id');
        $t->sale = $request->get('sale');
        // $t->total_sale = $request->get('total_sale');
        $t->description = $request->get('description');
        $getavatar = '';
        if($request->hasFile('avatar')){

            $this->validate($request, 
                [

                    'avatar' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ]
            );
            
            $avatar = $request->file('avatar');
            $getavatar = time().'_'.$avatar->getClientOriginalName();
            $destinationPath = public_path('upload/');
            $avatar->move($destinationPath, $getavatar);
        }
        $t->avatar = 'upload/'.$request->get('avatar');
        $t->save();
        return redirect('/products')->with('success','Cập nhật tin thành công!');
        
    }
    public function destroy($id)
    {
      $tl = products::find($id);
      $tl->delete();
      return redirect('/products')->with('success', 'Đã xóa xong');

    }
}
