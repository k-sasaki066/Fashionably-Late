@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content-title')
Confirm
@endsection

@section('content')
<div class="confirm-form__group">
    <form class="confirm-form" action="" method="">
        <table class="confirm-table">
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    お名前
                </th>
                <td class="confirm-table__item"><input class="confirm-table__item-input" type="name" name="name" value="サンプル" readonly></td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    性別
                </th>
                <td class="confirm-table__item"><input class="confirm-table__item-input" type="" name="gender" value="サンプル" readonly></td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    メールアドレス
                </th>
                <td class="confirm-table__item"><input class="confirm-table__item-input" type="email" name="email" value="サンプル" readonly></td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    電話番号
                </th>
                <td class="confirm-table__item"><input class="confirm-table__item-input" type="tel" name="tel" value="サンプル" readonly></td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    住所
                </th>
                <td class="confirm-table__item"><input class="confirm-table__item-input" type="address" name="address" value="サンプル" readonly></td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    建物名
                </th>
                <td class="confirm-table__item"><input class="confirm-table__item-input" type="" name="building" value="サンプル" readonly></td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    お問い合わせの種類
                </th>
                <td class="confirm-table__item"><input class="confirm-table__item-input" type="" name="category_id" value="サンプル" readonly></td>
            </tr>
            <tr class="confirm-table__row">
                <th class="confirm-table__header">
                    お問い合わせ内容
                </th>
                <td class="confirm-table__item"><input class="confirm-table__item-input" type="text" name="detail" value="サンプル" readonly></td>
            </tr>
        </table>
        <div class="confirm-table__button">
            <button class="common-button">送信</button>
            <a class="confirm-table__button--fix" href="">修正</a>
        </div>
    </form>
</div>
@endsection