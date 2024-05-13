<?php

return array(

    'accepted'                  => 'لقد قبلت هذا الأصل بنجاح.',
    'declined'                  => 'لقد رفضت هذا الأصل بنجاح.',
    'bulk_manager_warn'	        => 'تم تحديث المستخدمين بنجاح، ولكن لم يتم حفظ إدخال مديرك لأن المدير الذي حددته كان أيضا في قائمة المستخدمين التي سيتم تعديلها، وقد لا يكون المستخدمون مديرهم الخاص. يرجى تحديد المستخدمين مرة أخرى، باستثناء المدير.',
    'user_exists'               => 'المستخدم موجود مسبقاً!',
    'user_not_found'            => 'User does not exist.',
    'user_login_required'       => 'حقل تسجيل الدخول اجباري',
    'user_has_no_assets_assigned' => 'No assets currently assigned to user.',
    'user_password_required'    => 'كلمة المرور اجبارية.',
    'insufficient_permissions'  => 'صلاحيات غير كافية.',
    'user_deleted_warning'      => 'تم حذف المستخدم. سيكون عليك استعادة هذا المستخدم اذا ارت التعديل عليه او تسليمه اجهزة جديدة.',
    'ldap_not_configured'        => 'لم يتم تكوين دمج لداب لهذا التثبيت.',
    'password_resets_sent'      => 'تم إرسال رابط إعادة تعيين كلمة المرور للمستخدمين المحددين الذين تم تفعيلهم ولديهم عناوين بريد إلكتروني صالحة.',
    'password_reset_sent'       => 'تم إرسال رابط إعادة تعيين كلمة المرور إلى البريد الإلكتروني!',
    'user_has_no_email'         => 'This user does not have an email address in their profile.',
    'log_record_not_found'        => 'A matching log record for this user could not be found.',


    'success' => array(
        'create'    => 'تم إنشاء المستخدم بنجاح.',
        'update'    => 'تم تعديل المستخدم بنجاح.',
        'update_bulk'    => 'تم تحديث المستخدمين بنجاح!',
        'delete'    => 'تم حذف المستخدم بنجاح.',
        'ban'       => 'تم حظر المستخدم بنجاح.',
        'unban'     => 'تم إلغاء الحظر عن المستخدم بنجاح.',
        'suspend'   => 'تم تعليق المستخدم بنجاح.',
        'unsuspend' => 'تم إلغاء التعليق عن المستخدم بنجاح.',
        'restored'  => 'تم استعادة المستخدم بنجاح.',
        'import'    => 'تم استيراد المستخدمين بنجاح.',
    ),

    'error' => array(
        'create' => 'حدث خطأ ما أثناء إنشاء هذا المستخدم. حاول مرة أخرى.',
        'update' => 'حدث خطأ أثناء تحديث هذا المستخدم. حاول مرة أخرى.',
        'delete' => 'حدث خطأ ما أثناء حذف هذا المستخدم. حاول مرة أخرى.',
        'delete_has_assets' => 'يحتوي هذا المستخدم على عناصر تم اخراجها ولا يمكن حذفها.',
        'unsuspend' => 'حدث خطأ ما أثناء إلغاء تقييد الانتظار. حاول مرة أخرى.',
        'import'    => 'حدث خطأ أثناء استيراد المستخدمين. حاول مرة أخرى.',
        'asset_already_accepted' => 'هذا الجهاز تم قبوله مسبقاً.',
        'accept_or_decline' => 'يجب إما قبول مادة العرض هذه أو رفضها.',
        'incorrect_user_accepted' => 'لم يتم سحب مادة العرض التي حاولت قبولها.',
        'ldap_could_not_connect' => 'تعذر الاتصال بخادم LDAP. الرجاء التحقق من الاعدادات الخاصة بخادم LDAP في ملف اعدادات LDAP. <br>الخطأ من خادم LDAP:',
        'ldap_could_not_bind' => 'تعذر ربط خادم LDAP. الرجاء التحقق من الاعدادات الخاصة بخادم LDAP في ملف اعدادات LDAP. <br>الخطأ من خادم LDAP: ',
        'ldap_could_not_search' => 'تعذر البحث في خادم LDAP. الرجاء التحقق من الاعدادات الخاصة بخادم LDAP في ملف اعدادات LDAP. <br>الخطأ من خادم LDAP:',
        'ldap_could_not_get_entries' => 'تعذر الحصول على إدخالات من خادم LDAP. الرجاء التحقق من الاعدادات الخاصة بخادم LDAP في ملف اعدادات LDAP. <br>الخطأ من خادم LDAP:',
        'password_ldap' => 'تتم إدارة كلمة المرور لهذا الحساب بواسطة لداب / أكتيف ديركتوري. يرجى الاتصال بقسم تقنية المعلومات لتغيير كلمة المرور.',
    ),

    'deletefile' => array(
        'error'   => 'لم يتم حذف الملف. حاول مرة اخرى.',
        'success' => 'تم حذف الملف بنجاح.',
    ),

    'upload' => array(
        'error'   => 'لم يتم تحميل الملف. حاول مرة اخرى.',
        'success' => 'تم تحميل الملف بنجاح.',
        'nofiles' => 'لم تحدد أية ملفات للتحميل',
        'invalidfiles' => 'واحد أو أكثر من الملفات كبير جدا أو هو نوع ملف غير مسموح به. أنواع الملفات المسموح بها هي ينغ و جيف و جبغ و دوك و دوك و بدف و تكست.',
    ),

    'inventorynotification' => array(
        'error'   => 'This user has no email set.',
        'success' => 'The user has been notified about their current inventory.'
    )
);