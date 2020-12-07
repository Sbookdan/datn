<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;

class bannerController extends Controller
{
    public function index() {        
        $ds=banner::select('id','avatar')
        ->orderBy('id','asc')
        ->paginate(5);
        return view('admin.banner.index', compact('ds'));
}

  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.banner.create');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {        
        $t = new banner([
            // 'name' => $request->get('name'),
            'avatar' => 'upload/'.$request->get('avatar'),
            ]);
        $t->save();
        return redirect('banner')->with('success','Banner được lưu');
    }
    public function edit($id) {
        $row = banner::find($id);
        return view('admin.banner.edit',compact('row'));
    }
    public function update(Request $request, $id) {    
        $t = banner::find($id);
        // $t->name =   $request->get('name');
        
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
        return redirect('/banner')->with('success','Cập nhật tin thành công!');
     }
     public function destroy($id)
    {
      $tl = banner::find($id);
        $tl->delete();
        return redirect('/banner')->with('success', 'Đã xóa xong');
    }
}
