@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('header-nav__link')
<a class="header-nav__link-button" href="">login</a>
@endsection

@section('content-title')
Register
@endsection

@section('content')
<div class="register-form__group">
    <form class="register-form" action="" method="">
        <div class="register-form__title">
            <span>お名前</span>
        </div>
        <div class="register-form__item">
            <input class="register-form__item-input"
            type="name" name="name" placeholder="例:山田 太郎">
        </div>
        <div class="error-message">
            message
        </div>
        <div class="register-form__title">
            <span>メールアドレス</span>
        </div>
        <div class="register-form__item">
            <input class="register-form__item-input"
            type="email" name="email" placeholder="例:test@example.com">
        </div>
        <div class="error-message">
            message
        </div>
        <div class="register-form__title">
            <span>パスワード</span>
        </div>
        <div class="register-form__item">
            <input class="register-form__item-input"
            type="password" name="password" placeholder="例:coachtech1106">
        </div>
        <div class="error-message">
            message
        </div>
        <div class="register-form__button">
            <button class="common-button register-form__button-submit" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection