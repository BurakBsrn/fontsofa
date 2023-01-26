<?php
// Aside menu
use App\Helpers\AdminDashboardHelper;
use App\Models\Blog;
use App\Models\Gallery;

return [

    'items' => [
        // Dashboard
        [
            'title' => 'Ana Sayfa',
            'root' => true,
            'icon' => 'flaticon2-architecture-and-city',
            'page' => 'admin.dashboard.index',
            'isRoute' => true,
            'new-tab' => false,
        ],

        //İletişim
        [
            'section' => 'İletişim',
            'auth' => 'contact-message-create'
        ],
        [
            'title' => 'İletişim',
            'icon' => 'media/svg/icons/Design/Difference.svg',
            'bullet' => 'line',
            'root' => true,
            'auth' => 'contact-message-create',
            'submenu' => [
                [
                    'title' => 'Bize Yaz',
                    'bullet' => 'dot',
                    'isRoute' => true,
                    'page' => 'admin.contact_messages.create',
                    'auth' => 'contact-message-create'
                ],
                [
                    'title' => 'İletişim Mesajları',
                    'bullet' => 'dot',
                    'isRoute' => true,
                    'page' => 'admin.contact_messages.index',
                    'auth' => 'contact-message-index'
                ]

            ]

        ],

        //Yetki Yönetimi
        [
            'section' => 'Yetki Yönetimi',
            'auth' => 'roles-index'
        ],
        [
            'title' => 'Kullanıcı Rol Yönetimi',
            'icon' => 'media/svg/icons/Tools/Tools.svg',
            'page' => 'admin.user_roles.index',
            'isRoute' => true,
            'bullet' => 'line',
            'root' => true,
            'auth' => 'user-roles-create'
        ],
        [
            'title' => 'Rol Yönetimi',
            'icon' => 'media/svg/icons/Tools/Tools.svg',
            'page' => 'admin.roles.index',
            'isRoute' => true,
            'bullet' => 'line',
            'root' => true,
            'auth' => 'roles-index'
        ],
        [
            'title' => 'Yetki Yönetimi',
            'icon' => 'media/svg/icons/General/Lock.svg',
            'page' => 'admin.permissions.index',
            'isRoute' => true,
            'bullet' => 'line',
            'root' => true,
            'auth' => 'permissions-index'
        ],

    ]

];
