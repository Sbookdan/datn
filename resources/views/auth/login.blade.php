@extends('layouts.layout')

@section('content')
<div class="container">
    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="form-login">
                        <h3>Đăng Nhập</h3>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tài khoản</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mật khẩu</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Đăng Nhập') }}
                                </button>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-primary btn-block"
                                    id="btnn">
                                    Login with Facebook
                                </a>
                            </div>
                            <div class="form-group">
                                <a href="{{ route('social.oauth', 'google') }}" class="btn btn-danger btn-block"
                                    id="btnn">
                                    Login with Google
                                </a>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection