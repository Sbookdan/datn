@extends('layouts.layout')

@section('title', 'sbook')


@section('content')
<div class="container">
        <div class="main">
            <div class="row banner">
                <div class="slide-show">
                    <img class="mySlides img-fluid" src="./images/1253_new.jpg" alt="SlideShow" srcset="">
                    <img class="mySlides img-fluid" src="./images/slide_1.jpg" alt="SlideShow" srcset="">
                    <img class="mySlides img-fluid" src="./images/slide_2.jpg" alt="SlideShow" srcset="">
                    <img class="mySlides img-fluid" src="./images/slide_3.png" alt="SlideShow" srcset="">
                    <img class="mySlides img-fluid" src="./images/slide_4.png" alt="SlideShow" srcset="">

                    <button id="pre1" onclick="plusDivs(-1)">&#10094;</button>
                    <button id="next1" onclick="plusDivs(+1)">&#10095;</button>

                </div>
            </div>
            <section class="catalog-books" style="margin-bottom:100px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 menu-4">
                            <div class="cata-books-left">
                                <p>Danh Mục</p>
                                <div id="menu-cata-left">
                                    <ul class="list-group">

                                        <!-- Văn hóa - Xã hội -->

                                        <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="#">Văn hóa - Xã hội</a>
                                            <ul class="drop-menu">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <h2>Văn hóa - Xã hội</h2>
                                                    <span class="badge badge-primary badge-pill">100</span>

                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <a href="#">Chính trị - Pháp luật</a>
                                                    <span class="badge badge-primary badge-pill">2</span>

                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <a href="#">Tôn giáo - Tâm linh</a>
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                            </ul>
                                            <span class="badge badge-primary badge-pill">100</span>
                                        </li> -->
                                        
                                       
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="cata-books-right">
                                <p>Kệ Sách</p>
                                <div class="container">
                                    <div class="row">
                                    @foreach($kesach as $ks)
                                    <div class="card-1 min-books col-md-4 book-left" style="width: 18rem;">
                                            <a href="{{route('product',[$ks->id])}}">
                                                <div class="figure">
                                                    <img src="./images/{{$ks->avatar}}" alt="" srcset="">
                                                </div>
                                                <div class="card-body">
                                                    <h4>
                                                    {{$ks->name}}
                                                    </h4>
                                                </div>
                                            </a>
                                        </div>
                                        
							        @endforeach
                                   
                                    {{ $ks->links() }}
                                    </div>
                                </div>
                                <div class="card-1 text-center">
                                    <div class="card-body">
                                        <div class="xemthem">
                                            <a href="#">
                                                <div class="row">
                                                    <p style="padding: 0 5px; margin-top: -6px;">Xem Thêm</p>
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-double-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                            <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                                                        </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            </section>

        </div>
    </div>






@endsection