@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content-title')
Contact
@endsection

@section('content')
<div class="contact-form__group">
    <form class="contact-form" action="/confirm" method="post">
        @csrf
        <table class="contact-table">
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    お名前<span class="contact-table__header-require">※</span>
                </th>
                <td class="contact-table__item name-form">
                    <div class="name-wrap">
                        <div class="contact-form__name">
                            <input class="contact-form__item-input" type="name" name="first_name" value="{{ old('first_name') }}" placeholder="例:山田">
                            @error('first_name')
                            <div class="error-message">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="contact-form__name">
                            <input class="contact-form__item-input" type="name" name="last_name" value="{{ old('last_name') }}" placeholder="例:太郎">
                            @error('last_name')
                            <div class="error-message">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <!-- <input class="contact-form__item-input contact-form__name" type="name" name="first_name" value="{{ old('first_name') }}" placeholder="例:山田">
                    <input class="contact-form__item-input contact-form__name" type="name" name="last_name" value="{{ old('last_name') }}" placeholder="例:太郎">
                    @error('first_name')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                    @enderror
                    @error('last_name')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                    @enderror -->
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    性別<span class="contact-table__header-require">※</span>
                </th>
                <td class="contact-table__item">
                    <label class="contact-form__gender-label">
                        <input class="contact-form__radio" type="radio" name="gender" value= "1" {{ old('gender') == 1 ? 'checked' : '' }} checked>男性
                    </label>
                    <label class="contact-form__gender-label">
                        <input class="contact-form__radio" type="radio" name="gender" value="2" {{ old('gender') == 2 ? 'checked' : '' }}>女性
                    </label>
                    <label class="contact-form__gender-label">
                        <input class="contact-form__radio" type="radio" name="gender" value="3" {{ old('gender') == 3 ? 'checked' : '' }}>その他
                    </label>
                    @error('gender')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                    @enderror
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    メールアドレス<span class="contact-table__header-require">※</span>
                </th>
                <td class="contact-table__item">
                    <input class="contact-form__item-input" type="email" name="email" value="{{ old('email') }}" placeholder="例:test@example.com">
                    @error('email')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                    @enderror
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    電話番号<span class="contact-table__header-require">※</span>
                </th>
                <td class="contact-table__item tel-form">
                    <input class="contact-form__item-input contact-form__tel" type="tel" name="tel1" value="{{ old('tel1') }}" placeholder="例:080">
                    <span>-</span>
                    <input class="contact-form__item-input contact-form__tel" type="tel" name="tel2" value="{{ old('tel2') }}" placeholder="例:1234">
                    <span>-</span>
                    <input class="contact-form__item-input contact-form__tel" type="tel" name="tel3" value="{{ old('tel3') }}" placeholder="例:5678">
                    @error('tel1')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                    @enderror
                    @error('tel2')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                    @enderror
                    @error('tel3')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                    @enderror
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    住所<span class="contact-table__header-require">※</span>
                </th>
                <td class="contact-table__item">
                    <input class="contact-form__item-input" type="text" name="address" value="{{ old('address') }}" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                    @error('address')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                    @enderror
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    建物名
                </th>
                <td class="contact-table__item">
                    <input class="contact-form__item-input" type="text" name="building" value="{{ old('building') }}" placeholder="例:千駄ヶ谷マンション101">
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    お問い合わせの種類<span class="contact-table__header-require">※</span>
                </th>
                <td class="contact-table__item">
                    <select class="contact-form__item-input contact-form__select" name="category_id" value="{{ old('category_id') }}">
                        <option value="" selected>選択してください</option>
                            @foreach($categories as $category)
                            <option value="{{ $category['id'] }}" @if( old('category_id') ==  $category['id']) selected @endif>{{ $category['content'] }}</option>
                            @endforeach
                    </select>
                    @error('category_id')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                    @enderror
                </td>
            </tr>
            <tr class="contact-table__row">
                <th class="contact-table__header">
                    お問い合わせ内容<span class="contact-table__header-require">※</span>
                </th>
                <td class="contact-table__item">
                    <textarea class="contact-form__textarea" name="detail">{{ old('detail') }}</textarea>
                    @error('detail')
                    <div class="error-message">
                        {{ $message }}
                    </div>
                    @enderror
                </td>
            </tr>
        </table>

        <div class="confirm__button">
            <button class="common-button confirm__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection
