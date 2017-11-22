<?php

return [

    'undeployable'        => '<strong>تحذير: </strong> هذا الأصل معلم كـ غير قابل للنشر.
إذا لم يتغير هذا الوضع، يرجى تحديث الحالة الأصول.',
    'does_not_exist'    => 'الأصل غير موجود.',
    'does_not_exist_or_not_requestable' => 'محاولة جيدة. هذا الأصل غير موجود أو غير قابل للتطبيق.',
    'assoc_users'        => 'يتم حاليا سحب مادة العرض هذه إلى مستخدم ولا يمكن حذفها. يرجى التحقق من مادة العرض أولا، ثم محاولة الحذف مرة أخرى.',

    'create' => [
        'error'        => 'لم يتم إنشاء مادة العرض، يرجى إعادة المحاولة. :(',
        'success'        => 'تم إنشاء الأصل بنجاح.',
    ],

    'update' => [
        'error'            => 'لم يتم تحديث مادة العرض، يرجى إعادة المحاولة',
        'success'            => 'تم تحديث الأصل بنجاح.',
        'nothing_updated'    =>  'لم يتم اختيار أي حقول، لذلك لم يتم تحديث أي شيء.',
    ],

    'restore' => [
        'error'        => 'لم تتم استعادة مادة العرض، يرجى إعادة المحاولة',
        'success'        => 'تمت استعادة مادة العرض بنجاح.',
    ],

    'audit' => [
        'error'        => 'لم تنجح مراجعة الأصول. حاول مرة اخرى.',
        'success'        => 'تم تسجيل تدقيق الأصول بنجاح.',
    ],

    'deletefile' => [
        'error'   => 'لم يتم حذف الملف. الرجاء المحاولة مرة اخرى.',
        'success' => 'تم حذف الملف بنجاح.',
    ],

    'upload' => [
        'error'   => 'لم يتم تحميل الملف. حاول مرة اخرى.',
        'success' => 'تم تحميل الملف بنجاح.',
        'nofiles' => 'لم تحدد أي ملفات للتحميل، أو أن الملف الذي تحاول تحميله كبير جدا',
        'invalidfiles' => 'واحد أو أكثر من الملفات كبير جدا أو هو نوع ملف غير مسموح به. أنواع الملفات المسموح بها هي ينغ و جيف و جبغ و دوك و دوك و بدف و تكست.',
    ],

    'import' => [
        'error'                 => 'لم يتم استيراد بعض العناصر بشكل صحيح.',
        'errorDetail'           => 'لم يتم استيراد العناصر التالية بسبب الأخطاء.',
        'success'               => 'تم استيراد الملف',
        'file_delete_success'   => 'تم حذف ملفك بنجاح',
        'file_delete_error'      => 'تعذر حذف الملف',
    ],

    'delete' => [
        'confirm'    => 'هل تريد بالتأكيد حذف مادة العرض هذه؟',
        'error'        => 'حدثت مشكلة أثناء حذف مادة العرض. حاول مرة اخرى.',
        'nothing_updated'   => 'لم يتم اختيار أي أصول، لذلك لم يتم حذف أي شيء.',
        'success'        => 'تم حذف الأصل بنجاح.',
    ],

    'checkout' => [
        'error'        => 'لم يتم سحب مادة العرض، يرجى إعادة المحاولة',
        'success'        => 'تم التحقق من الأصول بنجاح.',
        'user_does_not_exist' => 'هذا المستخدم غير صالح. حاول مرة اخرى.',
        'not_available' => 'هذا الأصل غير متاح للخروج!',
        'no_assets_selected' => 'You must select at least one asset from the list',
    ],

    'checkin' => [
        'error'        => 'لم يتم التحقق من مادة العرض، يرجى إعادة المحاولة',
        'success'        => 'تم التحقق من مادة العرض بنجاح.',
        'user_does_not_exist' => 'هذا المستخدم غير صالح. حاول مرة اخرى.',
        'already_checked_in'  => 'تم التحقق من ذلك الأصل بالفعل.',

    ],

    'requests' => [
        'error'        => 'لم يتم طلب مادة العرض، يرجى إعادة المحاولة',
        'success'        => 'تم طلب مادة العرض بنجاح.',
        'canceled'      => 'تم إلغاء طلب تشيكوت بنجاح',
    ],

];
