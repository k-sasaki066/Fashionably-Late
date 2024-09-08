<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div>
        <button class="show-detail__button" type="button" wire:click="openModal()" name="show-detail">詳細</button>

        @if($showModal)
        <div class="modal__group">
            <div class="close-detail__modal">
                <button class="close-detail__button" type="button" wire:click="closeModal()">×</button>
            </div>
            <div class="modal__content">
                <table class="modal-table">
                    <tr class="modal-table__row">
                        <th class="modal-table__header">お名前</th>
                        <td class="modal-table__item">{{$detail['first_name'] .' ' .$detail['last_name']}}</td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">性別</th>
                        <td class="modal-table__item">
                            @if($detail['gender'] == 1 )男性
                            @elseif($detail['gender'] == 2 )女性
                            @else その他 @endif
                        </td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">メールアドレス</th>
                        <td class="modal-table__item">{{$detail['email']}}</td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">電話番号</th>
                        <td class="modal-table__item">{{$detail['tel']}}</td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">住所</th>
                        <td class="modal-table__item">{{$detail['address']}}</td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">建物名</th>
                        <td class="modal-table__item">{{$detail['building']}}</td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">お問い合わせの種類</th>
                        <td class="modal-table__item">{{$detail['category']['content']}}</td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">お問い合わせ内容</th>
                        <td class="modal-table__item">{{$detail['detail']}}
                        </td>
                    </tr>
                </table>
            </div>
                <button class="delete-button__submit" type="button" wire:click="deleteUser({{$detail['id']}})" name="delete">削除</button>
        </div>
        @endif
    </div>
</div>
