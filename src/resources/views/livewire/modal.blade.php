<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div>
        <button class="show-detail__button" type="button" wire:click="openModal()" name="show-detail">詳細</button>

        @if($showModal)
        <div class="modal__group">
            <div class="close-detail__modal">
                <button class="close-detail__button" type="button" wire:click="closeModal()">閉じる</button>
            </div>
            <div class="modal__content">
                <table class="modal-table">
                    <tr class="modal-table__row">
                        <th class="modal-table__header">お名前</th>
                        <td class="modal-table__item">サンプル</td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">性別</th>
                        <td class="modal-table__item">サンプル</td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">メールアドレス</th>
                        <td class="modal-table__item">サンプル</td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">電話番号</th>
                        <td class="modal-table__item">サンプル</td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">住所</th>
                        <td class="modal-table__item">サンプル</td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">建物名</th>
                        <td class="modal-table__item">サンプル</td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">お問い合わせの種類</th>
                        <td class="modal-table__item">サンプル</td>
                    </tr>
                    <tr class="modal-table__row">
                        <th class="modal-table__header">お問い合わせ内容</th>
                        <td class="modal-table__item">商品に傷があり返品したいです。商品に傷があり返品したいです。商品に傷があり返品したいです。商品に傷があり返品したいです。商品に傷があり返品したいです。
                        </td>
                    </tr>
                </table>
            </div>
            <form class="delete-button" action="" method="">
                <button class="delete-button__submit" type="button" name="">削除</button>
            </form>
        </div>
        @endif
    </div>
</div>
