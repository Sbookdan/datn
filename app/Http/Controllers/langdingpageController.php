<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Product;
// use App\Cart;
use App\Catalog;
use Session;
use Cart;
use App\Brand;
use App\Slide;
use App\Comment;
use Auth;

class langdingpageController extends Controller
{
    public function index()
    {
      
      $kesach = Product::where("id",'>=',0)->orderBy('id')->take(6)->get();
      $sachmoi = Product::where('total_sale','!=',0)->orderBy('pro_sale_id','desc')->take(8)->get();
      $sachmoi2 = Product::where('total_sale','!=',0)->orderBy('id','desc')->take(2)->get();
      $sachbanchay = Product::where('pro_att_id','>',10)->orderBy('id','desc')->take(4)->get();
        // $products = Product::where('price_promotion','!=',0)->orderBy('price_promotion','desc')->take(12)->get();
        // // $brand = Brand::where("id",'>',1)->inRandomOrder()->take(9)->get();
      $catalog = Catalog::get();
        // // $slide = Slide::get();
        // foreach($products as $product){
        //   $product->image = explode(',', $product->image);
        // }
        // // $img_aray = explode(",", $products->image);
        // // echo $img_aray[0]; 
        return view('index', 
        [
          'kesach'=>$kesach,
          'sachmoi'=>$sachmoi,
          'sachmoi2'=>$sachmoi2,
          'sachbanchay'=>$sachbanchay,
          'catalog'=>$catalog,
          // 'brand'=>$brand,
          // 'slides'=>$slide
          ]);
    
        //  return view('index');
    }

    public function product()
    {
    //   $comment = Comment::select('comment.*','users.name')->where('id_product','=',$req->id)->leftJoin('users','users.id','=','comment.id_user')->get();
    
    $author = Product::where("author",'>=',0)->distinct()->take(10) ->get();
    $product = Product::get();
    
      // $product->image = explode(',', $product->image);

      return view('product',
      [
        'product'=>$product,
        'author'=>$author
        ]);


    }

    public function productID(Request $req)
    {

      $author = Product::where("id",'>=',0)->orderBy('id')->take(6)->get();
      $product = Product::get();
 
      return view('product',
      [
        'product'=>$product,
        'author'=>$author
        ]);


    }

    public function addComment(Request $req){
        $comment = new Comment;

        $idUser = $req->input('idUser');
        $idProduct = $req->input('idProduct');
        $content = $req->input('comment');

        $comment->id_user = $idUser;
        $comment->id_product = $idProduct;
        $comment->content = $content;
        $comment->save();
        $div = `<li>
                  <div class="review-heading">
                    <h5 class="name">`.Auth::user()->name.`</h5>
                    <p class="date">`.date('d/m/Y').`</p>
                  </div>
                  <div class="review-body">
                    <p>`.$content.`</p>
                  </div>
                </li>`;
        return response()->json([
          'name'=> Auth::user()->name,
          'date'=> date('d/m/Y'),
          'content'=> $content
        ]);
    }
    public function store(Request $req)
    {
      if(isset($_GET['minPrice'])){
        $min = $req->minPrice;
        $max = $req->maxPrice;
        $product = product::where('price_unit','>=',$min)->where('price_unit','<=',$max)->get();
        // dd($product);
        return view('store',compact('product'));
      }else{
        $product = product::paginate(9);
        return view('store',compact('product'));
      }
      
    }

    public function viewcart()
    {
      $items = Cart::content();
      $cart = Cart::count() ;
      if($cart == 0) {
        return view('test1');
      }else{
        return view('viewcart',['items'=>$items]);
      }
    
      
    }
    public function deleteItem($rowId){
      Cart::remove($rowId);
      return redirect()->back();
  }
    public function news(){
        return view('news');
    }
    public function contact(){
        return view('contact');
    }
    public function auther(){
        return view('auther');
    }
}
