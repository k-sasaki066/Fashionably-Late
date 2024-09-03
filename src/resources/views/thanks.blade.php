@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks-message">
    <p class="thanks-message__text">お問い合わせありがとうございました</p>
    <a class="thanks-message__home-link" href="/">HOME</a>
</div>
@endsection