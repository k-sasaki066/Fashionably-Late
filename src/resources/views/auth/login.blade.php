@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('header-nav__link')
<a class="header-nav__link-button" href="">register</a>
@endsection

@section('content')
<div class="content-title">
    <h3 class="content-title__text">Login</h3>
</div>
<div class="login-form__group">
    <form class="login-form" action="" method="">
        <div class="login-form__title">
            <span>メールアドレス</span>
        </div>
        <div class="login-form__item">
            <input class="login-form__item-input"
            type="email" name="email" placeholder="例:test@example.com">
        </div>
        <!-- <div class="login__error-message">
            message
        </div> -->
        <div class="login-form__title">
            <span>パスワード</span>
        </div>
        <div class="login-form__item">
            <input class="login-form__item-input"
            type="password" name="password" placeholder="例:coachtech1106">
        </div>
        <!-- <div class="login__error-message">
            message
        </div> -->
        <div class="login-form__button">
            <button class="login-form__button-submit" type="submit">ログイン</button>
        </div>
    </form>
</div>
@endsection