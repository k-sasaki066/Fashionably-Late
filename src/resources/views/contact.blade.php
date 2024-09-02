@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content-title')
Contact
@endsection

@section('content')
<div class="contact-form__group">
    <form class="contact-form" action="" method="">
        <table class="contact-table">
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    お名前<span class="contact-table__header-span">※</span>
                </th>
                <td class="contact-table__item">
                    <input class="contact-form__item-input contact-form__name" type="" name="" value="" placeholder="例:山田">
                    <input class="contact-form__item-input contact-form__name" type="" name="" value="" placeholder="例:太郎">
                    <div class="error-message">
                        message
                    </div>
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    性別<span class="contact-table__header-span">※</span>
                </th>
                <td class="contact-table__item">
                    <input class="contact-form__radio" type="radio" name="" value="男性">男性
                    <input class="contact-form__radio" type="radio" name="" value="女性">女性
                    <input class="contact-form__radio" type="radio" name="" value="その他">その他
                    <div class="error-message">
                        message
                    </div>
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    メールアドレス<span class="contact-table__header-span">※</span>
                </th>
                <td class="contact-table__item">
                    <input class="contact-form__item-input" type="email" name="" value="" placeholder="例:test@example.com">
                    <div class="error-message">
                        message
                    </div>
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    電話番号<span class="contact-table__header-span">※</span>
                </th>
                <td class="contact-table__item">
                    <input class="contact-form__item-input contact-form__tel" type="tel" name="" value="" placeholder="例:080">
                    <span>-</span>
                    <input class="contact-form__item-input contact-form__tel" type="tel" name="" value="" placeholder="例:1234">
                    <span>-</span>
                    <input class="contact-form__item-input contact-form__tel" type="tel" name="" value="" placeholder="例:5678">
                    <div class="error-message">
                        message
                    </div>
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    住所<span class="contact-table__header-span">※</span>
                </th>
                <td class="contact-table__item">
                    <input class="contact-form__item-input" type="address" name="" value="" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                    <div class="error-message">
                        message
                    </div>
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    建物名
                </th>
                <td class="contact-table__item">
                    <input class="contact-form__item-input" type="address" name="" value="" placeholder="例:千駄ヶ谷マンション101">
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    お問い合わせの種類<span class="contact-table__header-span">※</span>
                </th>
                <td class="contact-table__item">
                    <select class="contact-form__item-input contact-form__select" name="" value="">
                        <option value="">選択</option>
                    </select>
                    <div class="error-message">
                        message
                    </div>
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    お問い合わせ内容<span class="contact-table__header-span">※</span>
                </th>
                <td class="contact-table__item">
                    <textarea class="contact-form__textarea" name=""></textarea>
                    <div class="error-message">
                        message
                    </div>
                </td>
            </tr>
        </table>

        <div class="confirm__button">
            <button class="common-button confirm__button-submit">確認画面</button>
        </div>
    </form>
</div>
@endsection
