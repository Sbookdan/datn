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
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="shipping" id="shipradio_1"
                                                value="1" checked>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Giao Hỏa Tốc</h5>
                                        <p class="card-text" style="width: 150px;">20.000 VND</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="shipping" id="shipradio_2"
                                                value="2" checked>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Giao Tiêu Chuẩn</h5>
                                        <p class="card-text" style="width: 150px;">10.000 VND</p>
                                    </div>
                                </div>
                            </div>
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
                            <p>Tạm tính(<?php echo $totalproduct ?> Sảm Phẩm)</p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>Tổng tiền</p>
                        <span style="color:red">.000 VND</span>
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
                            @foreach ($payment_methods as $paycart)
                            <li class="nav-item" style="padding: 4px;">
                                <a class="list-group-item list-group-item-action {{ $paycart->id == 1 ? 'active' : '' }}"
                                    id="list-home-list" data-toggle="list" href="#list-home{{ $paycart->id }}"
                                    role="tab" aria-controls="home"
                                    style="width: 100px; height: auto;background: #ffff; border-bottom: #ffff;">
                                    <img class="img-fluid" src="{{ asset('img/payment/'.$paycart->avatar) }}" alt=""
                                        srcset="">
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="col-8">
                            <div class="tab-content" id="nav-tabContent">
                                @foreach ($payment_methods as $paycart)
                                <div class="tab-pane fade show {{ $paycart->id == 1 ? 'active' : '' }}"
                                    id="list-home{{ $paycart->id }}" role="tabpanel" aria-labelledby="list-home-list">
                                    @if($paycart->id == 2)
                                    <div class="promotion" style="width: 345px;">
                                        <p>Giảm ngay 19K cho khi toán bằng ZaloPay</p>
                                    </div>
                                    @endif
                                    <form action="{{ route('checkout.pay.cart') }}" method="POST" role="form">
                                        @csrf
                                        <input type="hidden" value="{{ $paycart->id }}" id="id" name="id">
                                        <button type="submit" class="btn btn-primary" id="{{ $paycart->id }}">
                                            {{ $paycart->name }} </button>
                                    </form>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection