<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal1">
    削除する
</button>
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="label1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="label1">確認</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                本当に削除しますか？
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary mr-5" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="location.href='{{ action('Admin\UserController@delete', ['id' => $post_form->id]) }}'">OK</button>
            </div>
        </div>
    </div>
</div>
