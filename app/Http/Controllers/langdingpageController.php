<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use lluminate\Pagination\LengthAwarePaginator;
use App\Product;
// use App\Cart;
use App\Catalog;
use App\SubCatalog;
use Session;
use Cart;
use App\Brand;
use App\Slide;
use App\Comment;
use Auth;
use App\Models\banner;

class langdingpageController extends Controller
{
  public function index()
  {
    // $kesach = Product::where("id",'>=',0)->orderBy('id')->take(6)->get();;
    $kesach = Product::paginate(6);
    $sachmoi = Product::where('sale', '!=', 0)->orderBy('id', 'desc')->take(8)->get();
    $sachmoi2 = Product::where('sale', '!=', 0)->orderBy('id', 'desc')->take(2)->get();
    $sachkm = Product::where('sale', '!=', null)->take(4)->get();
    $sachbanchay = Product::where('sale', '>=', 20)->orderBy('id', 'desc')->take(4)->get();
    $sachhot10 = Product::where('sale', '!=', 0)->orderBy('id', 'desc')
      ->whereMonth('created_at', '11')
      ->take(2)->get();
    $banneruser = banner::all();

    // $cateatt = DB::table('attached')
    //               ->whereExists(function ($query) {
    //                 $query->select(DB::raw(1))
    //                   ->from('categories')
    //                   ->whereRaw('attached.att_cate_id = categories.id');
    //               })
    //               ->get();

    $cateatt = DB::table('categories')->join('attached', 'categories.id', '=', 'attached.att_cate_id')->get();

    // $products = Product::where('price_promotion','!=',0)->orderBy('price_promotion','desc')->take(12)->get();
    // // $brand = Brand::where("id",'>',1)->inRandomOrder()->take(9)->get();
    $catalog = Catalog::get();
    $cat2 = SubCatalog::select('att_cate_id', DB::raw('count(*) as total'))

      ->groupBy('att_cate_id')
      ->get();

    // $cat9 = SubCatalog::get()
    //                 ->where('att_cate_id','9')
    //                 ->count();
    // // $slide = Slide::get();
    // foreach($products as $product){
    //   $product->image = explode(',', $product->image);
    // }
    // // $img_aray = explode(",", $products->image);
    // // echo $img_aray[0]; 
    return view(
      'index',
      [
        'cat2' => $cat2,
        'kesach' => $kesach,
        'sachmoi' => $sachmoi,
        'sachmoi2' => $sachmoi2,
        'sachkm' => $sachkm,
        'sachbanchay' => $sachbanchay,
        'sachhot10' => $sachhot10,
        'catalog' => $catalog,
        'cateatt' => $cateatt,
        'banneruser' => $banneruser,
        // 'slides'=>$slide
      ]
    );

    // return view('test', ['kesach' => $kesach]);
  }

  public function product(Request $req)
  {
    //   $comment = Comment::select('comment.*','users.name')->where('id_product','=',$req->id)->leftJoin('users','users.id','=','comment.id_user')->get();
    $catalog = Product::where('id', $req->id)->value('pro_att_id');
    $author = Product::where("author", '>=', 0)->distinct()->take(10)->get();
    $product2 = Product::where('id', $req->id)->get();
    $product = Product::where('id', $req->id)->get();
    $pro_att = Product::where('id', $req->id)->value('pro_att_id');
    $pro = Product::where("pro_att_id", $pro_att)->distinct()->get();
    // $product->image = explode(',', $product->image);

    return view(
      'product-detail',
      [
        // 'catalog'=>$catalog,
        'product2' => $product2,
        'product' => $product,
        'author' => $author,
        'pro' => $pro
      ]
    );
  }

  public function products()
  {
    $catalog = Catalog::get();
    $author = Product::where("author", '>=', 0)->orderBy('id')->take(6)->get();
    $product = Product::paginate(6);
    return view(
      'product',
      [
        'catalog' => $catalog,
        'product' => $product,
        'author' => $author
      ]
    );
  }

  public function addComment(Request $req)
  {
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
                    <h5 class="name">` . Auth::user()->name . `</h5>
                    <p class="date">` . date('d/m/Y') . `</p>
                  </div>
                  <div class="review-body">
                    <p>` . $content . `</p>
                  </div>
                </li>`;
    return response()->json([
      'name' => Auth::user()->name,
      'date' => date('d/m/Y'),
      'content' => $content
    ]);
  }
  public function store(Request $req)
  {
    if (isset($_GET['minPrice'])) {
      $min = $req->minPrice;
      $max = $req->maxPrice;
      $product = product::where('price_unit', '>=', $min)->where('price_unit', '<=', $max)->get();
      // dd($product);
      return view('store', compact('product'));
    } else {
      $product = product::paginate(9);
      return view('store', compact('product'));
    }
  }

  public function viewcart()
  {
    $items = Cart::content();
    $cart = Cart::count();
    if ($cart == 0) {
      return view('test1');
    } else {
      return view('viewcart', ['items' => $items]);
    }
  }
  public function deleteItem($rowId)
  {
    Cart::remove($rowId);
    return redirect()->back();
  }
  public function news()
  {

    $book9 =  DB::table('products')
      ->orderBy('id', 'desc')
      ->whereMonth('created_at', '11')
      ->whereYear('created_at', '2020')
      ->take(8)
      ->get();
    $book10 =  DB::table('products')
      ->orderBy('id', 'desc')
      ->whereMonth('created_at', '12')
      ->whereYear('created_at', '2020')
      ->take(8)
      ->get();
    return view(
      'news',
      [
        'book9' => $book9,
        'book10' => $book10
      ]
    );
  }
  public function contact()
  {
    return view('contact');
  }
  public function auther()
  {
    $author = Product::paginate(12);
    return view(
      'auther',
      [
        'author' => $author
      ]
    );
  }
  public function author(Request $req)
  {
    //   $comment = Comment::select('comment.*','users.name')->where('id_product','=',$req->id)->leftJoin('users','users.id','=','comment.id_user')->get();

    $product = Product::where('author', $req->author)->get();

    // $product->image = explode(',', $product->image);
    $pro_att = Product::where('id', $req->author)->value('pro_att_id');
    $pro = Product::where("pro_att_id", $pro_att)->distinct()->get();
    return view(
      'author-product',
      [
        'product' => $product,
        'pro' => $pro
      ]
    );
    //  dd($req->author);
  }
}
