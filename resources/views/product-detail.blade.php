<style>
    .ftco-footer{
        width:100%;
    }
</style>

@extends('layouts.layout')

@section('title', 'Sbook')
@section('content')

<section class="hero-wrap hero-wrap-2" style="background-image: url('./images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate mb-0 text-center">
                    <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('index')}}">Trang chủ <i class="fa fa-chevron-right"></i></a></span>Book<span><i class="fa fa-chevron-right"></i></span></p>
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
                                            <img style="width:160px;height:218px" src="./images/{{$product->avatar}}" class="card-img " alt="sssss">
                                            </div>
                                        </div>
                                        <div class="card-header ">
                                            <h2>{{$product->name}}</h2>
                                            <p>{{$product->author}}</p>
                                            <p>{{$product->att_pro_id}}</p>
                                            <p>{{$product->pro_prub_id}}</p>
                                            <a href="#" class="btn btn-primary">Buy</a>
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
                                                    <img src="./images/nghi-giau-lam-giau.jpg" class="card-img-bottom" alt="...">
                                                </div>
                                            </div>
                                            <div class="card-1 mb-3 align-items-center img-cate">
                                                <div class="book-product" style="margin: 10px 0;">
                                                    <img src="./images/millers-valley.jpg" class="card-img-bottom" alt="...">
                                                </div>
                                            </div>
                                            <div class="card-1 mb-3 align-items-center img-cate">
                                                <div class="book-product" style="margin: 10px 0;">
                                                    <img src="./images/chang-trai-nam-ay.jpg" class="card-img-bottom" alt="...">
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
                                <img src="./images/{{$pro->avatar}} " alt=" " srcset=" ">
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
