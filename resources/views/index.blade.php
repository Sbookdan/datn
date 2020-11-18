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

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
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
                                        </li>

                                        <!-- Khoa học - Công nghệ -->

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="#">Khoa học - Công nghệ</a>
                                            <ul class="drop-menu">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <h2>Khoa học - Công nghệ</h2>
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <a href="#">Kiến thức khoa học</a>
                                                    <span class="badge badge-primary badge-pill">2</span>

                                                </li>
                                            </ul>
                                            <span class="badge badge-primary badge-pill">2</span>
                                        </li>

                                        <!-- Kinh dị -->

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="#">Kinh dị</a>
                                            <ul class="drop-menu">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <h2>Kinh dị</h2>
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <a href="#">Truyện tâm linh</a>
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                            </ul>
                                            <span class="badge badge-primary badge-pill">2</span>
                                        </li>

                                        <!-- Văn học -->

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="#">Văn học</a>
                                            <ul class="drop-menu">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <h2>Văn học</h2>
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <a href="#">Thơ - Tiểu thuyết</a>
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <a href="#">Truyện ngắn</a>
                                                    <span class="badge badge-primary badge-pill">2</span>
                                                </li>
                                            </ul>
                                            <span class="badge badge-primary badge-pill">2</span>
                                        </li>

                                        <!-- Ngôn tình -->

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="#">Ngôn tình</a>
                                            <ul class="drop-menu">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <h2>Ngôn tình</h2>
                                                    <span class="badge badge-primary badge-pill">2</span>
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
                                            <span class="badge badge-primary badge-pill">2</span>
                                        </li>

                                        <!-- Kinh doanh -->

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="#">Kinh doanh</a>
                                            <ul class="drop-menu">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <h2>Kinh doanh</h2>
                                                    <span class="badge badge-primary badge-pill">2</span>
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
                                            <span class="badge badge-primary badge-pill">2</span>
                                        </li>

                                        <!-- Thiếu Nhi -->

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="#">Thiếu nhi</a>
                                            <ul class="drop-menu">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <h2>Thiếu nhi</h2>
                                                    <span class="badge badge-primary badge-pill">2</span>
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
                                            <span class="badge badge-primary badge-pill">2</span>
                                        </li>

                                        <!-- Truyện tranh -->

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="#">Truyện tranh</a>
                                            <ul class="drop-menu">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <h2>Truyện tranh</h2>
                                                    <span class="badge badge-primary badge-pill">2</span>
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
                                            <span class="badge badge-primary badge-pill">2</span>
                                        </li>

                                        <!-- Nhà xuất bản -->

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="#">Nhà xuất bản</a>
                                            <ul class="drop-menu">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <h2>Nhà xuất bản</h2>
                                                    <span class="badge badge-primary badge-pill">2</span>
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
                                            <span class="badge badge-primary badge-pill">2</span>
                                        </li>

                                        <!-- Tác giả -->

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="#">Tác giả</a>
                                            <ul class="drop-menu">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <h2>Tác giả</h2>
                                                    <span class="badge badge-primary badge-pill">2</span>
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
                                            <span class="badge badge-primary badge-pill">2</span>
                                        </li>

                                        <!-- Tạp chí -->

                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <a href="#">Tạp chí</a>
                                            <ul class="drop-menu">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    <h2>Tạp chí</h2>
                                                    <span class="badge badge-primary badge-pill">2</span>
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
                                            <span class="badge badge-primary badge-pill">2</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="cata-books-right">
                                <p>Kệ Sách</p>
                                <div class="container">
                                    <div class="row">
                                        <div class="card-1 min-books col-md-4 book-left" style="width: 18rem;">
                                            <a href="#">
                                                <div class="figure">
                                                    <img src="./images/chang-trai-nam-ay.jpg" alt="" srcset="">
                                                </div>
                                                <div class="card-body">
                                                    <h4>
                                                        Chàng trai năm ấy
                                                    </h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-1 min-books col-md-4 book-left" style="width: 18rem;">
                                            <a href="#">
                                                <div class="figure">
                                                    <img src="./images/chang-trai-nam-ay.jpg" alt="" srcset="">
                                                </div>
                                                <div class="card-body">
                                                    <h4>
                                                        Chàng trai năm ấy
                                                    </h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-1 min-books col-md-4 book-left" style="width: 18rem;">
                                            <a href="#">
                                                <div class="figure">
                                                    <img src="./images/chang-trai-nam-ay.jpg" alt="" srcset="">
                                                </div>
                                                <div class="card-body">
                                                    <h4>
                                                        Chàng trai năm ấy
                                                    </h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-1 min-books col-md-4 book-left" style="width: 18rem;">
                                            <a href="#">
                                                <div class="figure">
                                                    <img src="./images/chang-trai-nam-ay.jpg" alt="" srcset="">
                                                </div>
                                                <div class="card-body">
                                                    <h4>
                                                        Chàng trai năm ấy
                                                    </h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-1 min-books col-md-4 book-left" style="width: 18rem;">
                                            <a href="#">
                                                <div class="figure">
                                                    <img src="./images/chang-trai-nam-ay.jpg" alt="" srcset="">
                                                </div>
                                                <div class="card-body">
                                                    <h4>
                                                        Chàng trai năm ấy
                                                    </h4>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="card-1 min-books col-md-4 book-left" style="width: 18rem;">
                                            <a href="#">
                                                <div class="figure">
                                                    <img src="./images/chang-trai-nam-ay.jpg" alt="" srcset="">
                                                </div>
                                                <div class="card-body">
                                                    <h4>
                                                        Chàng trai năm ấy
                                                    </h4>
                                                </div>
                                            </a>
                                        </div>
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
            <section class="ftco-section ftco-no-pt mt-5 mt-md-0">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                            <div class="services-2 text-center">
                                <div class="icon-wrap">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-wrench" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z"/>
                                          </svg>
                                    </div>
                                </div>
                                <h2><a href="#">Bảo hành</a></h2>
                                <p>Quý khách có thể tham khảo thêm tại:
                                    <a href="baohanh.html">Chính sách bảo hành tại SBooks như thế nào ?</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                            <div class="services-2 text-center">
                                <div class="icon-wrap">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-truck" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                          </svg>
                                    </div>
                                </div>
                                <h2><a href="#">Vận chuyển</a></h2>
                                <p>Quý khách có thể tham khảo thêm tại:
                                    <a href="shippinganddelivery.html">Giao hàng & Nhận hàng</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                            <div class="services-2 text-center">
                                <div class="icon-wrap">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-cash-stack" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 3H1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-1z"/>
                                            <path fill-rule="evenodd" d="M15 5H1v8h14V5zM1 4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H1z"/>
                                            <path d="M13 5a2 2 0 0 0 2 2V5h-2zM3 5a2 2 0 0 1-2 2V5h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 13a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                                          </svg>
                                    </div>
                                </div>
                                <h2><a href="#">Thanh toán </a></h2>
                                <p>Quý khách có thể tham khảo thêm tại:
                                    <a href="payments.html">Giao hàng & Nhận hàng</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex align-items-stretch ftco-animate">
                            <div class="services-2 text-center">
                                <div class="icon-wrap">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="flaticon-history"></span>
                                    </div>
                                </div>
                                <h2><a href="#">History</a></h2>
                                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ftco-section">
                <div class="card-1 mb-3">
                    <h2 class="mb-4">Bảng Xếp Hạng</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 top-user-1" style="margin-bottom: 20px; margin-top: 20px;">
                            <div class="container">
                                <div class="row">
                                    <div class="card-1 w-50">
                                        <div class="card-1 chu-top-1">
                                            <div class="number-top-10">
                                                <span class="top-1" style="color:#00e6e6;">1</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-1 w-75">
                                        <div class="card-1 img-top-1">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="img-top-10 hehe">
                                                        <div class="avatar-user-top-1">
                                                            <div class="immg-avatar-user">
                                                                <img class="img-fluid" src="./images/image_2.jpg" alt="" srcset="" style="border-radius: 100%;">
                                                            </div>
                                                        </div>
                                                        <div class="avatar-top-1">
                                                            <div class="immg-avatar">
                                                                <img class="img-fluid" src="./images/img_level/—Pngtree—red circular border shines grainy_5475425.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-1 w-50">
                                        <div class="card name-top-1">
                                            <div class="card-body">
                                                <p class="card-text">Quỳnh Văn Sống</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="heading-section catalog-top-10">
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="number-top-10">
                                                    <span class="bxh" style="color: #ffff33;">2</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="img-top-10">
                                                    <div class="avatar-user">
                                                        <img class="img-fluid" src="./images/image_4.jpg" alt="" srcset="" style="border-radius: 100%;">
                                                    </div>
                                                    <div class="avatar">
                                                        <img src="./images/img_level/—Pngtree—golden ring border shines grainy_5475047.png " alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="number-top-10">
                                                    <p>Quỳnh Văn Sống</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="number-top-10">
                                                    <span class="bxh" style="color:#b35900;">3</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="img-top-10">
                                                    <div class="avatar-user">
                                                        <img class="img-fluid" src="./images/image_5.jpg" alt="" srcset="" style="border-radius: 100%;">
                                                    </div>
                                                    <div class="avatar">
                                                        <img src="./images/img_level/—Pngtree—rose gold ring border shines_5475301.png" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="number-top-10">
                                                    <p>Quỳnh Văn Sống</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="number-top-10">
                                                    <span class="bxh" style="color: #cccccc;">4</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="img-top-10">
                                                    <div class="avatar-user">
                                                        <img class="img-fluid" src="./images/image_3.jpg" alt="" srcset="" style="border-radius: 100%;">
                                                    </div>
                                                    <div class="avatar">
                                                        <img src="./images/img_level/—Pngtree—silver ring frame shines grainy_5475121.png" alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="number-top-10">
                                                    <p>Quỳnh Văn Sống</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="number-top-10">
                                                    <span class="bxh">5</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="img-top-10">
                                                    <div class="avatar-user">
                                                        <img class="img-fluid" src="./images/image_6.jpg" alt="" srcset="" style="border-radius: 100%;">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="number-top-10">
                                                    <p>Quỳnh Văn Sống</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="number-top-10">
                                                    <span class="bxh">6</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="img-top-10">
                                                    <div class="avatar-user">
                                                        <img class="img-fluid" src="./images/image_7.jpg" alt="" srcset="" style="border-radius: 100%;">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="number-top-10">
                                                    <p>Quỳnh Văn Sống</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="number-top-10">
                                                    <span class="bxh">7</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="img-top-10">
                                                    <div class="avatar-user">
                                                        <img class="img-fluid" src="./images/image_8.jpg" alt="" srcset="" style="border-radius: 100%;">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="number-top-10">
                                                    <p>Quỳnh Văn Sống</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="number-top-10">
                                                    <span class="bxh">8</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="img-top-10">
                                                    <div class="avatar-user">
                                                        <img class="img-fluid" src="./images/image_9.jpg" alt="" srcset="" style="border-radius: 100%;">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="number-top-10">
                                                    <p>Quỳnh Văn Sống</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="number-top-10">
                                                    <span class="bxh">9</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="img-top-10">
                                                    <div class="avatar-user">
                                                        <img class="img-fluid" src="./images/image_1.jpg" alt="" srcset="" style="border-radius: 100%;">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="number-top-10">
                                                    <p>Quỳnh Văn Sống</p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="number-top-10">
                                                    <span class="bxh">10</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="img-top-10">
                                                    <div class="avatar-user">
                                                        <img class="img-fluid" src="./images/person_1.jpg" alt="" srcset="" style="border-radius: 100%;">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="number-top-10">
                                                    <p>Quỳnh Văn Sống</p>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ftco-section b-new">
                <div class="container ">
                    <h2>Sách Mới</h2>
                    <div class="row ">
                        <div class="owl-carousel owl-theme ">
                            <div class="item ">
                                <a href="">
                                    <div class="books-new-up item">
                                        <img src="./images/2286.jpg " alt=" " srcset=" ">
                                    </div>
                                    <div class="books-new-down">
                                        <h3>Mộ tử thần</h3>
                                        <p>Hà Đăng</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item ">
                                <a href="">
                                    <div class="books-new-up ">
                                        <img src="./images/2278.jpg " alt=" " srcset=" ">
                                    </div>
                                    <div class="books-new-down ">
                                        <h3>Mộ tử thần</h3>
                                        <p>Hà Đăng</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item ">
                                <a href="">
                                    <div class="books-new-up ">
                                        <img src="./images/2286.jpg " alt=" " srcset=" ">
                                    </div>
                                    <div class="books-new-down ">
                                        <h3>Hoàng hà phục yêu truyện</h3>
                                        <p>Long Phi Có Yêu Khí</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item ">
                                <a href="">
                                    <div class="books-new-up ">
                                        <img src="./images/24372.jpg " alt=" " srcset=" ">
                                    </div>
                                    <div class="books-new-down ">
                                        <h3>Càng độc lập càng yêu quý</h3>
                                        <p>Vãn Tình</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item ">
                                <a href="">
                                    <div class="books-new-up ">
                                        <img src="./images/24752.jpg " alt=" " srcset=" ">
                                    </div>
                                    <div class="books-new-down ">
                                        <h3>Hộ chiếu tình yêu</h3>
                                        <p>Hồ Thu Hương</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item ">
                                <a href="">
                                    <div class="books-new-up ">
                                        <img src="./images/2278.jpg " alt=" " srcset=" ">
                                    </div>
                                    <div class="books-new-down ">
                                        <h3>Mộ tử thần</h3>
                                        <p>Hà Đăng</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item ">
                                <a href="">
                                    <div class="books-new-up ">
                                        <img src="./images/2278.jpg " alt=" " srcset=" ">
                                    </div>
                                    <div class="books-new-down ">
                                        <h3>Mộ tử thần</h3>
                                        <p>Hà Đăng</p>
                                    </div>
                                </a>
                            </div>
                            <div class="item ">
                                <a href="">
                                    <div class="books-new-up ">
                                        <img src="./images/2278.jpg " alt=" " srcset=" ">
                                    </div>
                                    <div class="books-new-down ">
                                        <h3>Mộ tử thần</h3>
                                        <p>Hà Đăng</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ftco-section b-sell">
                <div class="container">
                    <h2>Sách bán chạy</h2>
                    <div class="card-1 book-buy-go">
                        <div class="row">
                            <div class="col-md-3 books-sell">
                                <a href="">
                                    <div class="books-sell-up">
                                        <img class="img-fluid" src="./images/2278.jpg" alt="" srcset="">
                                    </div>
                                    <div class="books-sell-down text-center">
                                        <h3>Mộ tử thần</h3>
                                        <p>Hà Đăng</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 books-sell">
                                <a href="">
                                    <div class="books-sell-up">
                                        <img src="./images/2278.jpg" alt="" srcset="">
                                    </div>
                                    <div class="books-sell-down text-center">
                                        <h3>Mộ tử thần</h3>
                                        <p>Hà Đăng</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 books-sell">
                                <a href="">
                                    <div class="books-sell-up">
                                        <img src="./images/2278.jpg" alt="" srcset="">
                                    </div>
                                    <div class="books-sell-down text-center">
                                        <h3>Mộ tử thần</h3>
                                        <p>Hà Đăng</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 books-sell">
                                <a href="">
                                    <div class="books-sell-up">
                                        <img src="./images/2278.jpg" alt="" srcset="">
                                    </div>
                                    <div class="books-sell-down text-center">
                                        <h3>Mộ tử thần</h3>
                                        <p>Hà Đăng</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 books-sell">
                                <a href="">
                                    <div class="books-sell-up">
                                        <img src="./images/2278.jpg" alt="" srcset="">
                                    </div>
                                    <div class="books-sell-down text-center">
                                        <h3>Mộ tử thần</h3>
                                        <p>Hà Đăng</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 books-sell">
                                <a href="">
                                    <div class="books-sell-up">
                                        <img src="./images/2278.jpg" alt="" srcset="">
                                    </div>
                                    <div class="books-sell-down text-center">
                                        <h3>Mộ tử thần</h3>
                                        <p>Hà Đăng</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 books-sell">
                                <a href="">
                                    <div class="books-sell-up">
                                        <img src="./images/2278.jpg" alt="" srcset="">
                                    </div>
                                    <div class="books-sell-down text-center">
                                        <h3>Mộ tử thần</h3>
                                        <p>Hà Đăng</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-3 books-sell">
                                <a href="">
                                    <div class="books-sell-up">
                                        <img src="./images/2278.jpg" alt="" srcset="">
                                    </div>
                                    <div class="books-sell-down text-center">
                                        <h3>Mộ tử thần</h3>
                                        <p>Hà Đăng</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ftco-section ftco-no-pt">
                <div class="container-fluid px-md-4">
                    <div class="row justify-content-center pb-5 mb-3">
                        <div class="col-md-7 heading-section text-center ftco-animate">
                            <span class="subheading"></span>
                            <h2>Sách</h2>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row" style="margin-bottom: 10px;">
                            <div class="col-sm-6 ccol-6">
                                <div class="card-1" style="background: #f5f4f0; height: auto;">
                                    <div class="card-1" style="max-width: 540px; background: #f5f4f0;">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card-body-book">
                                                    <div class="iimgg">
                                                        <img class="img-fluid" src="./images/book-7.jpg " alt=" ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-2-6">
                                                <div class="card-body-book">
                                                    <div class="container ">
                                                        <h3 class="text-center ">Sach Moi</h3>
                                                        <p class="p-size text-left">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                                        <div class="row imgimg-top">
                                                            <div class="col-md-6">
                                                                <img class="img-fluid" src="./images/dac-nhan-tam.jpg " alt=" ">
                                                            </div>
                                                            <div class="col-md-6 imig">
                                                                <img class="img-fluid" src="./images/dac-nhan-tam.jpg " alt=" ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 ccol-6 col-top-375">
                                <div class="card-1" style="background: #f5f4f0; height: auto;">
                                    <div class="card-1" style="max-width: 540px; background: #f5f4f0;margin-bottom: 10px;">
                                        <div class="row no-gutters ">
                                            <div class="col-md-4">
                                                <div class="iimgg-new">
                                                    <img class="img-fluid" src="./images/chang-trai-nam-ay.jpg" alt=" ">
                                                </div>
                                            </div>
                                            <div class="col-md-8 ">
                                                <div class="card-body ">
                                                    <div class="container ">
                                                        <h3>Sach Moi</h3>
                                                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="card-1 w-40 margin-right-5" style="background: #f5f4f0;">
                                <div class="container ">
                                    <div class="row ">
                                        <div class="col-md-4 pad-4">
                                            <div class="iimgg-10">
                                                <img class="img-fluid" src="./images/chang-trai-nam-ay.jpg" alt=" ">
                                            </div>
                                        </div>
                                        <div class="col-md-8 ">
                                            <div class="row row-cols-1 row-cols-md-2">
                                                <div class="col mb-4">
                                                    <div class="card-1" style="background: #f5f4f0;">
                                                        <h4 class="text-right ">Sach Hot Thang 10</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="card-1" style="background: #f5f4f0;">
                                                                <div class="iimmgg">
                                                                    <img class="img-fluid" src="./images/dac-nhan-tam.jpg " alt=" ">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="card-1" style="background: #f5f4f0;">
                                                                <div class="iimmgg">
                                                                    <img class="img-fluid" src="./images/dac-nhan-tam.jpg " alt=" ">
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
                            <div class="card-1 w-57" style="background: #f5f4f0;">
                                <div class="container ">
                                    <p class="txt1">bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</p>
                                    <div class="row ">
                                        <div class="container ">
                                            <div class="iimgg-57">
                                                <div class="card-deck">
                                                    <div class="card">
                                                        <img src="./images/dac-nhan-tam.jpg " class="card-img-top " alt="... ">
                                                    </div>
                                                    <div class="card">
                                                        <img src="./images/dac-nhan-tam.jpg " class="card-img-top " alt="... ">
                                                    </div>
                                                    <div class="card">
                                                        <img src="./images/dac-nhan-tam.jpg " class="card-img-top " alt="... ">
                                                    </div>
                                                    <div class="card">
                                                        <img src="./images/dac-nhan-tam.jpg " class="card-img-top " alt="... ">
                                                    </div>
                                                    <div class="card">
                                                        <img src="./images/dac-nhan-tam.jpg " class="card-img-top " alt="... ">
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

        </div>
    </div>






@endsection