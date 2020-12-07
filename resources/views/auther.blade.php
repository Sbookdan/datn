@extends('layouts.layout')

@section('title', 'Auther')

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
                <h1 class="mb-0 bread">Authors</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Browse All Authors</h2>
            </div>
        </div>
        <div class="row">
            @foreach($author as $ath)
            <div class="col-md-2 ftco-animate">
                <ul class="top">
                    <li><a href="{{route('author',[$ath->author])}}">{{$ath->author}}</a></li>
                </ul>
            </div>
            @endforeach
            {!! $author->links("pagination::bootstrap-4") !!}
        </div>
    </div>
</section>

@endsection