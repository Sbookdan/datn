@extends('layouts.layout')

@section('title', 'Đổi Mật Khẩu')

@section('style')
<style>
.contact100-form-title {
    font-family: Montserrat-Bold;
    font-size: 30px;
    color: #fff;
    line-height: 1.2;
    text-transform: uppercase;
    width: 100%;
    min-height: 128px;
    position: relative;
    z-index: 1;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    overflow: hidden;
    padding: 30px 15px 30px 15px;
}
</style>
@stop

@section('content')
<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-login">
                    <div class="contact100-form-title">
                        <span>Đổi Mật Khẩu</span>
                    </div>
                    @foreach($users as $user)
                    <form method="POST" action="{{route('reset.password.update',$user->id)}}" id="apply-inquiry"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tài khoản</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}"
                                required autocomplete="email" readonly>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mật khẩu Hiện Tại</label>
                            <input id="password" type="password" class="form-control" name="password"
                                autocomplete="new-password">
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mật khẩu Mới</label>
                            <input id="password" type="password" class="form-control" name="newPassword"
                                autocomplete="new-password">
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nhập Lại Mật Khẩu</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" id="btnn">
                                {{ __('Đăng Nhập') }}
                            </button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection