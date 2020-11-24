<style>
.ftco-footer {
    width: 100%;
}
</style>

@extends('layouts.layout')

@section('title', 'Sbook')

@section('style')
<style>
.button {
    display: inline-block;
    border-radius: 4px;
    background-color: #f4511e;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 18px;
    padding: 5px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
}

.button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
}

.button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
}

.button:hover span {
    padding-right: 25px;
}

.button:hover span:after {
    opacity: 1;
    right: 0;
}
</style>
@stop

@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('./images/bg_5.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate mb-0 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('index')}}">Trang chủ <i
                                class="fa fa-chevron-right"></i></a></span>Book<span><i
                            class="fa fa-chevron-right"></i></span></p>
                @foreach($product2 as $pr)
                <h1 class="mb-0 bread">{{$pr->name}}</h1>
                @endforeach
            </div>
        </div>
    </div>
</section>

<div class="container top-ftco">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-between mb-4 theloai">
                <div class="card-1 mb-3">
                    <h4 class="product-select">Chọn thể loại sách</h4>
                </div>
                <div class="card-1">
                    <div class="row">
                        <div class="card-1 w-70">
                            <div class="container">
                                <div class="row no-gutters">
                                    @foreach($product as $product)
                                    <div class="col-md-4" style="padding: 0 10px; margin-bottom: 20px;">
                                        <div class="book-buy-product" style="margin: 10px 0;">
                                            <img style="width:160px;height:218px"
                                                src="./img/product/{{$product->avatar}}" class="card-img " alt="sssss">
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h2>{{$product->name}}</h2>
                                        <p>Tác Giả: {{$product->author}}</p>
                                        <p>Thể Loại: {{$product->pro_att_id}}, {{$product->pro_cate_id}}</p>
                                        <p>Nhà Xuất Bản: {{$product->pro_pub_id}}</p>
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                            <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                            <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                                            <input type="hidden" value="{{ $product->avatar }}" id="img" name="img">
                                            <input type="hidden" value="{{ $product->author }}" id="slug" name="author">
                                            <input type="hidden" value="{{ $product->sale }}" id="slug" name="sale">
                                            <input type="hidden" value="1" id="quantity" name="quantity">
                                            <div class="row">
                                                <button class="button" class="tooltip-test"
                                                    style="vertical-align:middle" title="Mua Sách">
                                                    <span><i class="fa fa-shopping-cart"></i> Mua</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="wtiter">
                                        <div class="card-body ">
                                            <p>{{$product->description}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <!-- <div class="justify-content-between align-items-center">
                                    <select class="selectpicker" multiple>
                                        <option>Văn hóa-Xã hội</option>
                                        <option>Khoa học-Công nghệ</option>
                                        <option>Kinh dị</option>
                                        <option>Kinh doanh</option>
                                        <option>Truyện tranh</option>
                                        <option>Tạp chí</option>
                                        <option>Ngôn tình</option>
                                        <option>Văn học</option>
                                        <option>Thiếu nhi</option>
                                        </select>
                                </div> -->
                            <div class="hihi">
                                <div class="col mb-4">
                                    <div class="card-1 h-100" style="margin-top: 10px;">
                                        <div class="card-1 mb-3 align-items-center img-cate">
                                            <div class="book-product" style="margin: 10px 0;">
                                                <img src="./images/nghi-giau-lam-giau.jpg" class="card-img-bottom"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <div class="card-1 mb-3 align-items-center img-cate">
                                            <div class="book-product" style="margin: 10px 0;">
                                                <img src="./images/millers-valley.jpg" class="card-img-bottom"
                                                    alt="...">
                                            </div>
                                        </div>
                                        <div class="card-1 mb-3 align-items-center img-cate">
                                            <div class="book-product" style="margin: 10px 0;">
                                                <img src="./images/chang-trai-nam-ay.jpg" class="card-img-bottom"
                                                    alt="...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section b-new">
        <div class="container ">
            <h2>Sách Liên Quan</h2>
            <div class="row ">
                <div class="owl-carousel owl-theme ">
                    @foreach($pro as $pro)
                    <div class="item ">
                        <div class="books-new-up item">
                            <img src="./img/product/{{$pro->avatar}} " alt=" " srcset=" ">
                        </div>
                        <div class="books-new-down text-center">
                            <h3><a href="{{route('product',[$pro->id])}}">{{$pro->name}}</a></h3>
                            <p>{{$pro->author}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
@endsection