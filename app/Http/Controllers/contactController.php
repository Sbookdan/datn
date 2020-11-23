<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController extends Controller
{
    public function index() {
        $ds = contact::all();
        return view('admin.contact.index', compact('ds'));
    }   
    public function create() {
        return view('admin.contact.create');
    }
    public function update(Request $request, $id) {
        
    }
    public function destroy($id)
    {
      $tl = contact::find($id);
      $tl->delete();
      return redirect('/contact')->with('success', 'Đã xóa xong');

    }
}
