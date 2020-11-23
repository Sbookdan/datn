<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\attached;

class attachedController extends Controller
{
    public function index() {        
        $ds=attached::select('id','name','att_cate_id')
        ->orderBy('id','desc')
        ->paginate(5);
        return view('admin.attached.index', compact('ds'));
}

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = categories::all();
        return view('admin.attached.create',compact('categories'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {        
        $t = new attached([
            'name' => $request->get('name'),
            'att_cate_id' => $request->get('att_cate_id'),
            ]);
        $t->save();
        return redirect('attached')->with('success','attached được lưu');
    }
    public function edit($id) {
        $row = attached::find($id);
        return view('admin.attached.edit',compact('row'));
    }
    public function update(Request $request, $id) {    
        $t = attached::find($id);
        $t->name =   $request->get('name');
        $t->att_cate_id =   $request->get('att_cate_id');
        $t->save();
        return redirect('/attached')->with('success','Cập nhật tin thành công!');
     }
     public function destroy($id)
    {
      $tl = attached::find($id);
        $tl->delete();
        return redirect('/attached')->with('success', 'Đã xóa xong');
    }
}
