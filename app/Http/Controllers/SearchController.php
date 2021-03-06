<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function Search(Request $req){
        // $term  = $request->term; // jquery

        $product=Product::Where('name','like','%'.$req->key.'%')
            ->take(4)
            ->get();
        
        // return json_encode($data);
        return view('search',compact('product'));
    }

}
