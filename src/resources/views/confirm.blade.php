@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content-title')
Confirm
@endsection

@section('content')
<div class="confirm-form__group">
    <form class="confirm-form" action="/thanks" method="post">
        @csrf
        <table class="confirm-table">
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    お名前
                </th>
                <td class="confirm-table__item">
                    <span>{{ $form['first_name'] .' ' .$form['last_name'] }}</span>
                    <input class="confirm-table__item-input" type="hidden" name="first_name" value="{{ $form['first_name']}}" readonly>
                    <input class="confirm-table__item-input" type="hidden" name="last_name" value="{{ $form['last_name']}}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    性別
                </th>
                <td class="confirm-table__item">
                    <input class="confirm-table__item-input" type="hidden" name="gender" value="{{ $form['gender'] }}" readonly>
                    @if($form['gender']== 1)
                    男性
                    @elseif($form['gender']== 2)
                    女性
                    @else
                    その他
                    @endif
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    メールアドレス
                </th>
                <td class="confirm-table__item">
                    <input class="confirm-table__item-input" type="email" name="email" value="{{ $form['email'] }}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    電話番号
                </th>
                <td class="confirm-table__item">
                    <input class="confirm-table__item-input" type="tel" name="tel" value="{{ $form['tel1'].$form['tel2'].$form['tel3'] }}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    住所
                </th>
                <td class="confirm-table__item">
                    <input class="confirm-table__item-input" type="address" name="address" value="{{ $form['address'] }}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    建物名
                </th>
                <td class="confirm-table__item">
                    <input class="confirm-table__item-input" type="" name="building" value="{{ $form['building'] }}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    お問い合わせの種類
                </th>
                <td class="confirm-table__item">
                    <span>{{ $category['content'] }}</span>
                    <input class="confirm-table__item-input" type="hidden" name="category_id" value="{{ $category['id'] }}" readonly>
                </td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    お問い合わせ内容
                </th>
                <td class="confirm-table__item">
                    <input class="confirm-table__item-input" type="text" name="detail" value="{{ $form['detail'] }}" readonly>
                </td>
            </tr>
        </table>
        <div class="confirm-table__button">
            <button class="common-button" type="submit" name="store">送信</button>
            <button class="contact-back__button" type="submit" name="back">修正</button>
        </div>
    </form>
</div>
@endsection