@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('header-nav__link')
@if(Auth::check())
<form class="logout__form" action="/logout" method="post">
    @csrf
    <button class="header-nav__link-button" type="submit">logout</button>
</form>
@endif
@endsection

@section('content-title')
Admin
@endsection

@section('content')
<form class="search-form" action="" method="">
    <input class="search-keyword" type="text" name="" value="" placeholder="名前やメールアドレスを入力してください">
    <select class="search-gender search-common" name="">
        <option value="">性別</option>
        <option value="1">男性</option>
        <option value="2">女性</option>
        <option value="3">その他</option>
    </select>
    <select class="search-content search-common" name="">
        <option value="">お問い合わせの種類</option>
    </select>
    <input class="search-date search-common" type="date" name="">
    <button class="search-button" type="submit" name="search">検索</button>
    <input class="search-reset" type="reset" name="reset">
</form>

<div class="display__group">
    <form class="scv-file" action="" method="">
        <input class="scv-file__button" type="" name="" placeholder="エクスポート">
    </form>
    <div class="pagi">
        pagination
    </div>
</div>

<div class="admin-table__group">
    <table class="admin-table">
        <tr class="admin-table__row">
            <th class="admin-table__header">お名前</th>
            <th class="admin-table__header">性別</th>
            <th class="admin-table__header">メールアドレス</th>
            <th class="admin-table__header">お問い合わせの種類</th>
            <th class="admin-table__header"></th>
        </tr>
        <tr class="admin-table__row">
            <td class="admin-table__item">サンプル</td>
            <td class="admin-table__item">サンプル</td>
            <td class="admin-table__item">サンプル</td>
            <td class="admin-table__item">サンプル</td>
            <td class="admin-table__item">サンプル</td>
        </tr>
    </table>
</div>

@endsection