@extends('layouts.layout')

@section('title', 'Contact')

@section('css')
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="./contact/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="./contact/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="./contact/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="./contact/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="./contact/vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="./contact/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="./contact/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="./contact/vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="./contact/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="./contact/css/util.css">
<link rel="stylesheet" type="text/css" href="./contact/css/main.css">
<!--===============================================================================================-->
@stop

@section('content')
<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-login">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <div class="contact100-form-title">
                        <span>Liên Hệ</span>
                    </div>
                    <form method="POST" action="{{ route('send.email') }}" class="form-title">
                        @csrf
                        <div class="form-group wrap-input100 validate-input">
                            <input id="name" class="input100 @error('name') is-invalid @enderror" type="text"
                                name="name" placeholder="Họ và Tên">
                            <span class="focus-input100"></span>
                            <label class="label-input100" for="name">
                                <span class="lnr lnr-user m-b-2"></span>
                            </label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group wrap-input100 validate-input">
                            <input id="email" class="input100 @error('email') is-invalid @enderror" type="text"
                                name="email" placeholder="VD: abc123@email.com">
                            <span class="focus-input100"></span>
                            <label class="label-input100" for="email">
                                <span class="lnr lnr-envelope m-b-5"></span>
                            </label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group wrap-input100 validate-input">
                            <input id="phone" class="input100 @error('phone') is-invalid @enderror" type="text"
                                name="phone" placeholder="VD: 0123456789">
                            <span class="focus-input100"></span>
                            <label class="label-input100" for="phone">
                                <span class="lnr lnr-smartphone m-b-2"></span>
                            </label>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group wrap-input100 validate-input">
                            <input id="subject" class="input100 @error('subject') is-invalid @enderror" type="text"
                                name="subject" placeholder="Subject">
                            <span class="focus-input100"></span>
                            <label class="label-input100" for="phone">
                                <span class="lnr lnr-bubble"></span>
                            </label>
                            @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group wrap-input100 validate-input">
                            <textarea id="message" class="input100 @error('message') is-invalid @enderror"
                                name="message" placeholder="Bạn muốn nhắn gì với shop nào......"></textarea>
                            <span class="focus-input100"></span>
                            <label class="label-input100 rs1" for="message">
                                <span class="lnr lnr-bubble"></span>
                            </label>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="container-contact100-form-btn">
                            <button class="contact100-form-btn">
                                Send Now
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection