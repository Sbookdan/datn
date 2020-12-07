@extends('layouts.layout')

@section('title', 'sbook')


@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate mb-0 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>BOOKS <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Coming Soon</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-4">
                <div class="date-post w-100 text-lg-right mb-4">
                    <h3>November, 2020</h3>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($book9 as $book)
                        <div class="book-wrap book-wrap-2 d-md-flex">
                            <div class="img img-2 d-flex justify-content-end"
                                style="background-image: url(img/product/{{$book->avatar}});">
                                <div class="in-text">
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $book->id }}" id="id" name="id">
                                        <input type="hidden" value="{{ $book->name }}" id="name" name="name">
                                        <input type="hidden" value="{{ $book->price }}" id="price" name="price">
                                        <input type="hidden" value="{{ $book->avatar }}" id="img" name="img">
                                        <input type="hidden" value="{{ $book->author }}" id="slug" name="author">
                                        <input type="hidden" value="{{ $book->sale }}" id="slug" name="sale">
                                        <input type="hidden" value="1" id="quantity" name="quantity">
                                        <button class="icon d-flex align-items-center justify-content-center"
                                            class="tooltip-test" data-toggle="tooltip" data-placement="left"
                                            title="Mua Sách {{$book->name}}">
                                            <span class="flaticon-shopping-cart"></span>
                                        </button>
                                    </form>
                                    <button class="icon d-flex align-items-center justify-content-center"
                                        data-toggle="tooltip" data-placement="left" title="Xem {{$book->name}}">
                                        <a href="{{route('product',[$book->id])}}">
                                            <span class="flaticon-visibility"></span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                            <div class="text p-4">
                                <p class="mb-2"><span class="price">{{$book->price}}.000 VND</span></p>
                                <h2><a href="#">{{$book->name}}</a></h2>
                                <span class="position">By {{$book->author}}</span>
                                <p>{{$book->name}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-lg-4">
                <div class="date-post w-100 text-lg-right mb-4">
                    <h3>December, 2020</h3>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($book10 as $books)
                        <div class="book-wrap book-wrap-2 d-md-flex">
                            <div class="img img-2 d-flex justify-content-end"
                                style="background-image: url(images/book-4.jpg);">
                                <div class="in-text">
                                    <a href="#" class="icon d-flex align-items-center justify-content-center"
                                        data-toggle="tooltip" data-placement="left" title="Add to cart">
                                        <span class="flaticon-shopping-cart"></span>
                                    </a>
                                    <a href="#" class="icon d-flex align-items-center justify-content-center"
                                        data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
                                        <span class="flaticon-heart-1"></span>
                                    </a>
                                    <a href="#" class="icon d-flex align-items-center justify-content-center"
                                        data-toggle="tooltip" data-placement="left" title="Quick View">
                                        <span class="flaticon-search"></span>
                                    </a>
                                    <a href="#" class="icon d-flex align-items-center justify-content-center"
                                        data-toggle="tooltip" data-placement="left" title="Compare">
                                        <span class="flaticon-visibility"></span>
                                    </a>
                                </div>
                            </div>

                            <div class="text p-4">

                                <p class="mb-2"><span class="price">${{$books->price}}</span></p>
                                <h2><a href="#">{{$books->name}}</a></h2>
                                <span class="position">By {{$books->author}}/span>
                                    <p>{{$books->name}}.</p>

                            </div>

                        </div>
                        @endforeach
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
@endsection