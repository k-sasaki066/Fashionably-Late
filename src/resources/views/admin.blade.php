@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" href="{{ asset('css/modal.css') }}">
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
<div class="search-form__group">
    <form class="search-form" action="/admin/search" method="get">
        <input class="search__keyword-button" type="text" name="text" value="{{ request('text') }}" placeholder="名前やメールアドレスを入力してください">
        <select class="search__gender-button search-common" name="gender" value="{{ request('gender') }}">
            <option value="">性別</option>
            <option value="">全て</option>
            <option value="1" @if( request('gender')  ==  1) selected @endif>男性</option>
            <option value="2" @if(request('gender') ==  2) selected @endif>女性</option>
            <option value="3" @if(request('gender') ==  3) selected @endif>その他</option>
        </select>
        <select class="search__content-button search-common" name="content">
            <option value="">お問い合わせの種類</option>
            @foreach($categories as $category)
            <option value="{{ $category['id'] }}" @if(request('content') ==  $category['id']) selected @endif>{{ $category['content'] }}</option>
            @endforeach
        </select>
        <input class="search__date-button search-common" type="date" name="date" value="{{ request('date') }}">
        <button class="search-button__submit" type="submit">検索</button>
    </form>
    <form class="search-form__reset"action="/admin" method="get">
        <button class="search-button__reset" type="submit" name="reset">リセット</button>
    </form>
</div>

<div class="display__group">
    <form class="scv-file" action="{{'/export?'.http_build_query(request()->query())}}" method="post">
        @csrf
        <input class="scv-file__button" type="submit" value="エクスポート">
    </form>
    <div class="pagi">
        {{ $contacts->appends(request()->query())->links('vendor.pagination.custom') }}
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
        @foreach($contacts as $contact)
        <tr class="admin-table__row">
            <td class="admin-table__item">{{ $contact['first_name'] .' ' .$contact['last_name']}}</td>
            <td class="admin-table__item">
                @if($contact['gender'] == 1)
                男性
                @elseif($contact['gender'] == 2)
                女性
                @else
                その他
                @endif
            </td>
            <td class="admin-table__item">{{ $contact['email'] }}</td>
            <td class="admin-table__item">{{ $contact['category'] ['content']}}</td>
            <td class="admin-table__item">@livewire('modal',['contact_id'=>$contact['id']])</td>
        </tr>
        @endforeach
    </table>
</div>

@endsection