<?php

return [

    'does_not_exist' => 'Модель не существует.',
    'assoc_users'     => 'Данная модель связана с одним или несколькими активами, и не может быть удалена. Удалите либо измените связанные активы. ',

    'create' => [
        'error'   => 'Модель не была создана, повторите еще раз.',
        'success' => 'Модель успешно создана.',
        'duplicate_set' => 'Модель с таким именем, производителем и номером уже существует.',
    ],

    'update' => [
        'error'   => 'Невозможно обновить Модель, повторите еще раз',
        'success' => 'Модель успешно обновлена.',
    ],

    'delete' => [
        'confirm'   => 'Вы уверены, что хотите удалить данную модель актива?',
        'error'   => 'При удалении модели возникла ошибка. Повторите еще раз.',
        'success' => 'Модель успешно удалена.',
    ],

    'restore' => [
        'error'        => 'Модель не была восстановлена, повторите попытку',
        'success'        => 'Модель успешно восстановлена.',
    ],

    'bulkedit' => [
        'error'        => 'Никаких изменений нет, поэтому ничего не обновлено.',
        'success'        => 'Модели обновлены.',
    ],

];
