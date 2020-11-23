<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;


class categoriesController extends Controller
{
    public function index() {        
        $ds=categories::all();
        return view('admin.categories.index', compact('ds'));
}

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.categories.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {        
        $t = new categories([
            'name' => $request->get('name'),
            ]);
        $t->save();
        return redirect('categories')->with('success','categories được lưu');
    }
    public function edit($id) {
        $row = categories::find($id);
        return view('admin.categories.edit',compact('row'));
    }
    public function update(Request $request, $id) {    
        $t = categories::find($id);
        $t->name =   $request->get('name');
        $t->save();
        return redirect('/categories')->with('success','Cập nhật tin thành công!');
     }
     public function destroy($id)
    {
      $tl = categories::find($id);
        $tl->delete();
        return redirect('/categories')->with('success', 'Đã xóa xong');
    }
}
