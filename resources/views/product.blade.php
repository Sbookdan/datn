@extends('layouts.layout')

@section('title', 'Sbook')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate mb-0 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="{{route('index')}}">Trang Chủ <i
                                class="fa fa-chevron-right"></i></a></span> <span>BOOKS <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">BOOKS</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 ftco-animate">
                <div class="row">
                    @foreach($product as $pro)
                    <div class="col-md-4 d-flex">
                        <div class="book-wrap">
                            <div class="img d-flex justify-content-end w-100"
                                style="background-image: url(img/product/{{$pro->avatar}}); height: 350px;">
                                <div class="in-text">
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $pro->avatar }}" id="img" name="img">
                                        <input type="hidden" value="{{ $pro->author }}" id="slug" name="author">
                                        <input type="hidden" value="{{ $pro->sale }}" id="slug" name="sale">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <button class="icon d-flex align-items-center justify-content-center"
                                            class="tooltip-test" data-toggle="tooltip" data-placement="left"
                                            title="Mua Sách {{$pro->name}}">
                                            <span class="flaticon-shopping-cart"></span>
                                        </button>
                                    </form>
                                    <button class="icon d-flex align-items-center justify-content-center"
                                        data-toggle="tooltip" data-placement="left" title="Xem {{$pro->name}}">
                                        <a href="{{route('product',[$pro->id])}}">
											<span class="flaticon-visibility"></span>
										</a>
                                    </button>
                                </div>
                            </div>
                            <div class="text px-4 py-3 w-100">
                                <p class="mb-2"><span class="price">{{$pro->price}}.000 VND</span></p>
                                <h2><a href="{{route('product',[$pro->id])}}">{{$pro->name}}</a></h2>
                                <span class="position">{{$pro->author}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="block-27">
                            <!-- <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul> -->
                            <ul>
                                <li> {!! $product->links("pagination::bootstrap-4") !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->

            <div class="col-lg-3 sidebar pl-lg-3 ftco-animate">
                <div class="sidebar-box">
                    <form action="#" class="search-form">
                        <div class="form-group">
                            <span class="fa fa-search"></span>
                            <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Thể Loại</h3>
                        <ul>
                            @foreach($catalog as $cat)
                            <li><a href="#">{{$cat->name}}<span class="fa fa-chevron-right"></span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Top Tác Giả</h3>
                    <ul class="top">
                        @foreach($author as $author)
                        <li><a href="#">{{$author->author}}</a></li>
                        @endforeach
                        <!-- <li><a href="#">Sandra Park</a></li>
              	<li><a href="#">Laura Preston</a></li>
              	<li><a href="#">John Doe</a></li>
              	<li><a href="#">Mc Gregor Douglas</a></li>
              	<li><a href="#">Atom Night</a></li>
              	<li><a href="#">Danny Green</a></li>
              	<li><a href="#">Sonya Lopez</a></li>
              	<li><a href="#">Archie Bochs</a></li>
              	<li><a href="#">Jelian Coward</a></li>
              	<li><a href="#">Mark Hatton</a></li>
              	<li><a href="#">Madison Mc Collen</a></li> -->
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection