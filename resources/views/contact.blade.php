@extends('layouts.layout')

@section('title', 'Contact')

@section('content')
<section class="login">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-login">
                    <div class="contact100-form-title">
                        <span>Contact Us</span>
                    </div>
                    <form method="POST" action="{{ route('login') }}" class="form-title">
                        @csrf
                        <div class="form-group wrap-input100 validate-input">
                            <input id="name" class="input100" type="text" name="name" placeholder="Full name">
                            <span class="focus-input100"></span>
                            <label class="label-input100" for="name">
                                <span class="lnr lnr-user m-b-2"></span>
                            </label>
                        </div>
                        <div class="form-group wrap-input100 validate-input">
                            <input id="email" class="input100" type="text" name="email"
                                placeholder="Eg. example@email.com">
                            <span class="focus-input100"></span>
                            <label class="label-input100" for="email">
                                <span class="lnr lnr-envelope m-b-5"></span>
                            </label>
                        </div>
                        <div class="form-group wrap-input100 validate-input">
                            <input id="phone" class="input100" type="text" name="phone" placeholder="Eg. +1 800 000000">
                            <span class="focus-input100"></span>
                            <label class="label-input100" for="phone">
                                <span class="lnr lnr-smartphone m-b-2"></span>
                            </label>
                        </div>
                        <div class="form-group wrap-input100 validate-input">
                            <textarea id="message" class="input100" name="message"
                                placeholder="Your comments..."></textarea>
                            <span class="focus-input100"></span>
                            <label class="label-input100 rs1" for="message">
                                <span class="lnr lnr-bubble"></span>
                            </label>
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