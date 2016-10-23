<?php

return array(

    'undeployable' 		=> '<strong>警告:</strong>この資産は、現在 未配備としてマークされています。
                        この状態が変更された場合は、資産のステータスを更新してください。',
    'does_not_exist' 	=> '資産が存在しません。',
    'does_not_exist_or_not_requestable' => '申し訳ありません。その資産が存在しないまたはリクエスト可能ではありません。',
    'assoc_users'	 	=> 'この資産は利用者にチェックされているため削除できません。資産をチェック後、もう一度、やり直して下さい。 ',

    'create' => array(
        'error'   		=> '資産は作成されませんでした。もう一度、やり直して下さい。',
        'success' 		=> '資産は作成されました。'
    ),

    'update' => array(
        'error'   			=> '資産は更新されませんでした。もう一度、やり直して下さい。',
        'success' 			=> '資産は正常に更新されました。',
        'nothing_updated'	=>  'フィールドが選択されていないため、更新されませんでした。',
    ),

    'restore' => array(
        'error'   		=> '資産は復元されませんでした。もう一度、やり直して下さい。',
        'success' 		=> '資産は正常に復元されました。'
    ),

    'deletefile' => array(
        'error'   => 'ファイルが削除できませんでした。もう一度、やり直して下さい。',
        'success' => 'ファイルは正常に削除されました。',
    ),

    'upload' => array(
        'error'   => 'ファイルがアップロードできませんでした。もう一度、やり直して下さい。',
        'success' => 'ファイルが正常にアップロードされました。',
        'nofiles' => 'アップロードするファイルが選択されていないか、アップロードしようとしているファイルが大き過ぎます。',
        'invalidfiles' => 'いずれかのファイルが大き過ぎるか、ファイルタイプが許可されていません。許可されているファイルタイプ（png, gif, jpg, doc, docx, pdf, and txt）',
    ),

    'import' => array(
        'error'         => 'Some items did not import correctly.',
        'errorDetail'   => 'The following Items were not imported because of errors.',
        'success'       => "Your file has been imported",
    ),


    'delete' => array(
        'confirm'   	=> 'この資産を削除してもよろしいですか？',
        'error'   		=> '資産を削除する際に問題が発生しました。もう一度やり直して下さい。',
        'success' 		=> '資産は正常に削除されました。'
    ),

    'checkout' => array(
        'error'   		=> '資産はチェックアウトされませんでした。もう一度、やり直して下さい。',
        'success' 		=> '資産は正常にチェックアウトされました。',
        'user_does_not_exist' => 'その利用者は不正です。もう一度、やり直して下さい。',
        'not_available' => 'That asset is not available for checkout!'
    ),

    'checkin' => array(
        'error'   		=> '資産はチェックインされませんでした。もう一度、やり直して下さい。',
        'success' 		=> '資産は正常にチェックインされました。',
        'user_does_not_exist' => 'その利用者は不正です。もう一度、やり直して下さい。',
        'already_checked_in'  => 'その資産はすでにチェックインしています。',

    ),

    'requests' => array(
        'error'   		=> '資産は要求されませんでした。もう一度、やり直して下さい。',
        'success' 		=> '資産の要求処理が成功しました。',
    )

);
