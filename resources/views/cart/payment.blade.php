@extends('layouts.layout')

@section('title', 'Thanh Toán')

@section('content')
<div class="container" style="margin-bottom: 200px;">
    <div class="row">
        <div class="col-sm-12">
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
            @endif
        </div>
        <div class="col-sm-12">
            @if (Session::has('error'))
            <p class="alert alert-danger">{{ Session::get('error') }}</p>
            @endif
        </div>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('products')}}">Shop</a></li>
            <li class="breadcrumb-item"><a href="{{route('cart.index')}}">Giỏ Hàng</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thanh Toán Hóa Đơn</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-7">
            <h3>Chọn phương thức giao hàng</h3>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @foreach($shipping_fee as $ship_fee)
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios1" value="option1" checked>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$ship_fee->name}}</h5>
                                        <p class="card-text" style="width: 150px;">{{$ship_fee->price_ship}} VND</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="container">
                <div class="row">
                    <h3>Thông tin đơn hàng</h3>
                    <div class="col-md-6">
                        <div class="inf-product">
                            <p>Tạm tính({{ \Cart::getTotalQuantity()}} Sảm Phẩm)</p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Tổng tiền</p>
                        <span style="color:red">{{ \Cart::getTotal() }}.000 VND</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <h3>Chọn phương thức thanh toán</h3>
            <div class="row">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item" style="padding: 4px;">
                                <a class="list-group-item list-group-item-action active" id="list-home-list"
                                    data-toggle="list" href="#list-home" role="tab" aria-controls="home"
                                    style="width: 100px; height: auto;background: #ffff; border-bottom: #ffff;">
                                    <img class="img-fluid" src="{{ asset('img/payment/momo.png') }}" alt="" srcset="">
                                </a>
                            </li>
                            <li class="nav-item" style="padding: 4px;">
                                <a class="list-group-item list-group-item-action" id="list-profile-list"
                                    data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"
                                    style="width: 100px; height: auto;background: #ffff; border-bottom: #ffff;">
                                    <img class="img-fluid" src="{{ asset('img/payment/zalo.png') }}" alt="" srcset="">
                                </a>
                            </li>
                            <li class="nav-item" style="padding: 4px;">
                                <a class="list-group-item list-group-item-action" id="list-messages-list"
                                    data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"
                                    style="width: 100px; height: auto;background: #ffff; border-bottom: #ffff;">
                                    <img class="img-fluid" src="{{ asset('img/payment/money.png') }}" alt="" srcset="">
                                </a>
                            </li>
                            <li class="nav-item" style="padding: 4px;">
                                <a class="list-group-item list-group-item-action" id="list-settings-list"
                                    data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"
                                    style="width: 100px; height: auto;background: #ffff; border-bottom: #ffff;">
                                    <img class="img-fluid" src="{{ asset('img/payment/payment-methods.png') }}" alt=""
                                        srcset="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="list-home" role="tabpanel"
                                    aria-labelledby="list-home-list">
                                    <form action="{{ route('checkout.momo.order') }}" method="POST" role="form">
                                        @csrf
                                        <button type="submit" class="btn btn-primary"> Thanh Toán Bằng MoMo</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="list-profile" role="tabpanel"
                                    aria-labelledby="list-profile-list">
                                    <div class="promotion" style="width: 345px;">
                                        <p>Giảm ngay 19K cho khi toán bằng ZaloPay</p>
                                    </div>
                                    <form action="#" method="POST" role="form">
                                        @csrf
                                        <button type="submit" class="btn btn-primary"> Thanh Toán Bằng
                                            ZaloPay</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="list-messages" role="tabpanel"
                                    aria-labelledby="list-messages-list">
                                    <form action="#" method="POST" role="form">
                                        @csrf
                                        <button type="submit" class="btn btn-primary"> Thanh Toán Khi Nhận
                                            Hàng</button>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="list-settings" role="tabpanel"
                                    aria-labelledby="list-settings-list">
                                    <form action="#" method="POST" role="form">
                                        @csrf
                                        <button type="submit" class="btn btn-primary"> Thanh Toán Bằng Thẻ</button>
                                    </form>
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
@endsection