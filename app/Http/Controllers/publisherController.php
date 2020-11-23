<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\publisher;

class publisherController extends Controller
{
    public function index() {        
        $ds=publisher::all();
        return view('admin.publisher.index', compact('ds'));
}

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.publisher.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {        
        $t = new publisher([
            'name' => $request->get('name'),
            ]);
        $t->save();
        return redirect('publisher')->with('success','publisher được lưu');
    }
    public function edit($id) {
        $row = publisher::find($id);
        return view('admin.publisher.edit',compact('row'));
    }
    public function update(Request $request, $id) {    
        $t = publisher::find($id);
        $t->name =   $request->get('name');
        $t->save();
        return redirect('/publisher')->with('success','Cập nhật tin thành công!');
     }
     public function destroy($id)
    {
      $tl = publisher::find($id);
        $tl->delete();
        return redirect('/publisher')->with('success', 'Đã xóa xong');
    }
}
