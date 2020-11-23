<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\comments;

class commentsController extends Controller
{
    public function index() {
        $ds = comments::all();
        return view('admin.comments.index', compact('ds'));
    }
    
    public function show($id) {
        //
    }
    public function destroy($id)
    {
      $tl = comments::find($id);
      $tl->delete();
      return redirect('/comments')->with('success', 'Đã xóa xong');

    }
}
