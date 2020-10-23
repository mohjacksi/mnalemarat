<?php

return [
    'userManagement' => [
        'title'          => 'إدارة المستخدمين',
        'title_singular' => 'إدارة المستخدمين',
    ],
    'permission'     => [
        'title'          => 'الصلاحيات',
        'title_singular' => 'الصلاحية',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role'           => [
        'title'          => 'أدوار',
        'title_singular' => 'دور',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user'           => [
        'title'          => 'المستخدمين',
        'title_singular' => 'مستخدم',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'name'                      => 'Name',
            'name_helper'               => ' ',
            'email'                     => 'Email',
            'email_helper'              => ' ',
            'email_verified_at'         => 'Email verified at',
            'email_verified_at_helper'  => ' ',
            'password'                  => 'Password',
            'password_helper'           => ' ',
            'roles'                     => 'Roles',
            'roles_helper'              => ' ',
            'remember_token'            => 'Remember Token',
            'remember_token_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'approved'                  => 'Approved',
            'approved_helper'           => ' ',
            'verified'                  => 'Verified',
            'verified_helper'           => ' ',
            'verified_at'               => 'Verified at',
            'verified_at_helper'        => ' ',
            'verification_token'        => 'Verification token',
            'verification_token_helper' => ' ',
            'university'                => 'ID',
            'university_helper'         => ' ',
        ],
    ],
    'project'        => [
        'title'          => 'المشاريع',
        'title_singular' => 'المشاريع',
        'fields'         => [
            'id'                                 => 'ID',
            'id_helper'                          => ' ',
            'the_contractor'                     => 'المقاول',
            'the_contractor_helper'              => ' ',
            'purchase_order'                     => 'أمر الشراء',
            'purchase_order_helper'              => ' ',
            'date_of_purchase'                   => 'أمر الشراء',
            'date_of_purchase_helper'            => ' ',
            'project_reference'                  => 'مرجع المشروع (السنة)',
            'project_reference_helper'           => ' ',
            'initial_project_value'              => 'قيمة المشروع الأولية',
            'initial_project_value_helper'       => ' ',
            'date_of_commencement'               => 'تاريخ المباشرة',
            'date_of_commencement_helper'        => ' ',
            'assumed_date_of_receipt'            => 'تاريخ التسليم المفترض',
            'assumed_date_of_receipt_helper'     => ' ',
            'date_of_receipt_project'            => 'تاريخ الإستلام الفعلي',
            'date_of_receipt_project_helper'     => ' ',
            'delay_days'                         => 'التأخير بالايام',
            'delay_days_helper'                  => ' ',
            'justify_delay'                      => 'مبررات التأخير',
            'justify_delay_helper'               => ' ',
            'completion_rate'                    => 'نسبة الإنجاز الجارية',
            'completion_rate_helper'             => ' ',
            'created_at'                         => 'Created at',
            'created_at_helper'                  => ' ',
            'updated_at'                         => 'Updated at',
            'updated_at_helper'                  => ' ',
            'deleted_at'                         => 'Deleted at',
            'deleted_at_helper'                  => ' ',
            'pay_bef_end'                        => 'الدفعة قبل الختامية',
            'pay_bef_end_helper'                 => ' ',
            'warranty'                           => 'قيمة المحجوز',
            'warranty_helper'                    => ' ',
            'reserved_rate'                      => 'نسبة المحجوز',
            'reserved_rate_helper'               => ' ',
            'final_payment'                      => 'الدفعة الختامية',
            'final_payment_helper'               => ' ',
            'project_state'                      => 'حالة المشروع',
            'project_state_helper'               => ' ',
            'images'                             => 'الصور',
            'images_helper'                      => ' ',
            'attachments'                        => 'مستندات المشروع',
            'attachments_helper'                 => ' ',
            'work_done'                          => 'قيمة الأعمال المنجزة',
            'work_done_helper'                   => ' ',
            'notes'                              => 'ملاحظات',
            'notes_helper'                       => ' ',
            'project_name'                       => 'اسم المشروع/إذن التشغيل',
            'project_name_helper'                => ' ',
            'operating_permission_date'          => 'تاريخ إذن التشغيل',
            'operating_permission_date_helper'   => ' ',
            'date_of_delivery'                   => 'تاريخ تسليم الموقع',
            'date_of_delivery_helper'            => ' ',
            'project_duration'                   => 'مدة المشروع',
            'project_duration_helper'            => ' ',
            'samples_approval'                   => 'اعتماد العينات',
            'samples_approval_helper'            => ' ',
            'current_batch_number'               => 'رقم الدفعة الجارية',
            'current_batch_number_helper'        => ' ',
            'current_payment_value'              => 'قيمة الدفعة الجارية',
            'current_payment_value_helper'       => ' ',
            'initial_receipt_date'               => 'تاريخ الإستلام الابتدائي',
            'initial_receipt_date_helper'        => ' ',
            'final_receipt_date'                 => 'تاريخ الإستلام النهائي',
            'final_receipt_date_helper'          => ' ',
            'final_completion_percentage'        => 'نسبة الإنجاز النهائية',
            'final_completion_percentage_helper' => ' ',
            'delivery_recipient'                 => 'التسليم للجهة المستفيدة',
            'delivery_recipient_helper'          => ' ',
            'eng_name'                           => 'اسم المهندس المشرف',
            'eng_name_helper'                    => ' ',
            'prim_receiving_com'                 => 'لجنة الإستلام الابتدائي',
            'prim_receiving_com_helper'          => ' ',
            'final_receiv_com'                   => 'لجنة الإستلام النهائي',
            'final_receiv_com_helper'            => ' ',
        ],
    ],
    'property'       => [
        'title'          => 'إخلاء ممتلكات',
        'title_singular' => 'إخلاء ممتلكات',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => ' ',
            'propriety_name'             => 'اسم العين المؤجرة',
            'propriety_name_helper'      => ' ',
            'location'                   => 'الموقع',
            'location_helper'            => ' ',
            'contract_number'            => 'رقم عقد الايجار',
            'contract_number_helper'     => ' ',
            'tenant_name'                => 'اسم المستأجر',
            'tenant_name_helper'         => ' ',
            'date_of_preview'            => 'يوم وتاريخ المعاينة',
            'date_of_preview_helper'     => ' ',
            'estimate_reference'         => 'مرجع التقدير',
            'estimate_reference_helper'  => ' ',
            'estimate_date'              => 'تاريخ التقدير',
            'estimate_date_helper'       => ' ',
            'damage_statement_1'         => 'بيان الاضرار',
            'damage_statement_1_helper'  => ' ',
            'damage_value_1'             => 'قيمة الاضرار',
            'damage_value_1_helper'      => ' ',
            'notes_1'                    => 'ملاحظات',
            'notes_1_helper'             => ' ',
            'damage_statement_2'         => 'بيان الاضرار',
            'damage_statement_2_helper'  => ' ',
            'damage_value_2'             => 'قيمة الاضرار',
            'damage_value_2_helper'      => ' ',
            'notes_2'                    => 'ملاحظات',
            'notes_2_helper'             => ' ',
            'damage_statement_3'         => 'بيان الاضرار',
            'damage_statement_3_helper'  => ' ',
            'damage_value_3'             => 'قيمة الاضرار',
            'damage_value_3_helper'      => ' ',
            'notes_3'                    => 'ملاحظات',
            'notes_3_helper'             => ' ',
            'damage_statement_4'         => 'بيان الاضرار',
            'damage_statement_4_helper'  => ' ',
            'damage_value_4'             => 'قيمة الاضرار',
            'damage_value_4_helper'      => ' ',
            'notes_4'                    => 'ملاحظات',
            'notes_4_helper'             => ' ',
            'damage_statement_5'         => 'بيان الاضرار',
            'damage_statement_5_helper'  => ' ',
            'damage_value_5'             => 'قيمة الاضرار',
            'damage_value_5_helper'      => ' ',
            'notes_5'                    => 'ملاحظات',
            'notes_5_helper'             => ' ',
            'damage_statement_6'         => 'بيان الاضرار',
            'damage_statement_6_helper'  => ' ',
            'damage_value_6'             => 'قيمة الاضرار',
            'damage_value_6_helper'      => ' ',
            'notes_6'                    => 'ملاحظات',
            'notes_6_helper'             => ' ',
            'damage_statement_7'         => 'بيان الاضرار',
            'damage_statement_7_helper'  => ' ',
            'damage_value_7'             => 'قيمة الاضرار',
            'damage_value_7_helper'      => ' ',
            'notes_7'                    => 'ملاحظات',
            'notes_7_helper'             => ' ',
            'damage_statement_8'         => 'بيان الاضرار',
            'damage_statement_8_helper'  => ' ',
            'damage_value_8'             => 'قيمة الاضرار',
            'damage_value_8_helper'      => ' ',
            'notes_8'                    => 'ملاحظات',
            'notes_8_helper'             => ' ',
            'damage_statement_9'         => 'بيان الاضرار',
            'damage_statement_9_helper'  => ' ',
            'damage_value_9'             => 'قيمة الاضرار',
            'damage_value_9_helper'      => ' ',
            'notes_9'                    => 'ملاحظات',
            'notes_9_helper'             => ' ',
            'damage_statement_10'        => 'بيان الاضرار',
            'damage_statement_10_helper' => ' ',
            'damage_value_10'            => 'قيمة الاضرار',
            'damage_value_10_helper'     => ' ',
            'notes_10'                   => 'ملاحظات',
            'notes_10_helper'            => ' ',
            'accident_photos'            => 'صورة الحادث',
            'accident_photos_helper'     => ' ',
            'name_1'                     => 'الاسم',
            'name_1_helper'              => ' ',
            'dep_mang_1'                 => 'القسم - الإدارة',
            'dep_mang_1_helper'          => ' ',
            'name_2'                     => 'الاسم',
            'name_2_helper'              => ' ',
            'dep_mang_2'                 => 'القسم - الإدارة',
            'dep_mang_2_helper'          => ' ',
            'name_3'                     => 'الاسم',
            'name_3_helper'              => ' ',
            'dep_mang_3'                 => 'القسم - الإدارة',
            'dep_mang_3_helper'          => ' ',
            'name_4'                     => 'الاسم',
            'name_4_helper'              => ' ',
            'dep_mang_4'                 => 'القسم - الإدارة',
            'dep_mang_4_helper'          => ' ',
            'created_at'                 => 'Created at',
            'created_at_helper'          => ' ',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => ' ',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => ' ',
        ],
    ],
    'reportAccident' => [
        'title'          => 'تقرير حادث',
        'title_singular' => 'تقرير حادث',
        'fields'         => [
            'id'                         => 'ID',
            'id_helper'                  => ' ',
            'location'                   => 'موقع الحادث',
            'location_helper'            => ' ',
            'offender'                   => 'المتسبب',
            'offender_helper'            => ' ',
            'offender_id_number'         => 'رقم هوية المتسبب',
            'offender_id_number_helper'  => ' ',
            'car_number'                 => 'رقم السيارة',
            'car_number_helper'          => ' ',
            'issuer'                     => 'جهة الاصدار',
            'issuer_helper'              => ' ',
            'date_of_accident'           => 'يوم وتاريخ الحادث',
            'date_of_accident_helper'    => ' ',
            'accident_time'              => 'وقت الحادث',
            'accident_time_helper'       => ' ',
            'estimate_reference'         => 'مرجع التقدير',
            'estimate_reference_helper'  => ' ',
            'estimate_date'              => 'تاريخ التقدير',
            'estimate_date_helper'       => ' ',
            'damage_statement_1'         => 'بيان الاضرار',
            'damage_statement_1_helper'  => ' ',
            'damage_value_1'             => 'قيمة الاضرار',
            'damage_value_1_helper'      => ' ',
            'notes_1'                    => 'ملاحظات',
            'notes_1_helper'             => ' ',
            'damage_statement_2'         => 'بيان الاضرار',
            'damage_statement_2_helper'  => ' ',
            'damage_value_2'             => 'قيمة الاضرار',
            'damage_value_2_helper'      => ' ',
            'notes_2'                    => 'ملاحظات',
            'notes_2_helper'             => ' ',
            'damage_statement_3'         => 'بيان الاضرار',
            'damage_statement_3_helper'  => ' ',
            'damage_value_3'             => 'قيمة الاضرار',
            'damage_value_3_helper'      => ' ',
            'notes_3'                    => 'ملاحظات',
            'notes_3_helper'             => ' ',
            'damage_statement_4'         => 'بيان الاضرار',
            'damage_statement_4_helper'  => ' ',
            'damage_value_4'             => 'قيمة الاضرار',
            'damage_value_4_helper'      => ' ',
            'notes_4'                    => 'ملاحظات',
            'notes_4_helper'             => ' ',
            'damage_statement_5'         => 'بيان الاضرار',
            'damage_statement_5_helper'  => ' ',
            'damage_value_5'             => 'قيمة الاضرار',
            'damage_value_5_helper'      => ' ',
            'notes_5'                    => 'ملاحظات',
            'notes_5_helper'             => ' ',
            'damage_statement_6'         => 'بيان الاضرار',
            'damage_statement_6_helper'  => ' ',
            'damage_value_6'             => 'قيمة الاضرار',
            'damage_value_6_helper'      => ' ',
            'notes_6'                    => 'ملاحظات',
            'notes_6_helper'             => ' ',
            'damage_statement_7'         => 'بيان الاضرار',
            'damage_statement_7_helper'  => ' ',
            'damage_value_7'             => 'قيمة الاضرار',
            'damage_value_7_helper'      => ' ',
            'notes_7'                    => 'ملاحظات',
            'notes_7_helper'             => ' ',
            'damage_statement_8'         => 'بيان الاضرار',
            'damage_statement_8_helper'  => ' ',
            'damage_value_8'             => 'قيمة الاضرار',
            'damage_value_8_helper'      => ' ',
            'notes_8'                    => 'ملاحظات',
            'notes_8_helper'             => ' ',
            'damage_statement_9'         => 'بيان الاضرار',
            'damage_statement_9_helper'  => ' ',
            'damage_value_9'             => 'قيمة الاضرار',
            'damage_value_9_helper'      => ' ',
            'notes_9'                    => 'ملاحظات',
            'notes_9_helper'             => ' ',
            'damage_statement_10'        => 'بيان الاضرار',
            'damage_statement_10_helper' => ' ',
            'damage_value_10'            => 'قيمة الاضرار',
            'damage_value_10_helper'     => ' ',
            'notes_10'                   => 'ملاحظات',
            'notes_10_helper'            => ' ',
            'accident_photos'            => 'صورة الحادث',
            'accident_photos_helper'     => ' ',
            'name_1'                     => 'الاسم',
            'name_1_helper'              => ' ',
            'dep_mang_1'                 => 'القسم - الإدارة',
            'dep_mang_1_helper'          => ' ',
            'name_2'                     => 'الاسم',
            'name_2_helper'              => ' ',
            'dep_mang_2'                 => 'القسم - الإدارة',
            'dep_mang_2_helper'          => ' ',
            'name_3'                     => 'الاسم',
            'name_3_helper'              => ' ',
            'dep_mang_3'                 => 'القسم - الإدارة',
            'dep_mang_3_helper'          => ' ',
            'name_4'                     => 'الاسم',
            'name_4_helper'              => ' ',
            'dep_mang_4'                 => 'القسم - الإدارة',
            'dep_mang_4_helper'          => ' ',
            'created_at'                 => 'Created at',
            'created_at_helper'          => ' ',
            'updated_at'                 => 'Updated at',
            'updated_at_helper'          => ' ',
            'deleted_at'                 => 'Deleted at',
            'deleted_at_helper'          => ' ',
        ],
    ],
    'auditLog'       => [
        'title'          => 'سجل المستخدمين',
        'title_singular' => 'سجل المستخدمين',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Description',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Properties',
            'properties_helper'   => ' ',
            'host'                => 'Host',
            'host_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'followUp'       => [
        'title'          => 'خدمات الإشراف والمتابعة',
        'title_singular' => 'خدمات الإشراف والمتابعة',
    ],
];
