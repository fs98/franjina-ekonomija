<?php
return [
  'assets' => [
    'logo' => 'https://franjinaekonomija.hr/images/logo/header-logo.svg'
  ],
    'mail' => [
        'settings' => [
            'mail_server' => 'mail.franjinaekonomija.hr'
        ],
        
        'hub' => [
            'username' => 'dev@franjinaekonomija.hr',
            'password' => '88isallyouneed',
            'fullname' => 'Franjina Ekonomija',
            'contact_email' => [
                'subject' => 'Franjina Ekonomija - Kontakt formular'
            ]
        ]
    ],
    'statuses' => [
        'active' => 'active',
        'inactive' => 'inactive'
    ],
    'storage_paths' => [
        'users' => 'public/users/',
        'posts' => 'public/posts/', 
        'projects' => 'public/projects/', 
        'events' => 'public/events/',
        'gallery' => 'public/gallery/',
        'partners' => 'public/partners/',
        'sliders' => 'public/sliders/',
        'bloggers' => 'public/bloggers/',
        'activities' => 'public/activities/',
    ],
     'storage_paths_v2' => [
        'users' => 'storage/users/',
        'posts' => 'storage/posts/', 
        'projects' => 'storage/projects/', 
        'events' => 'storage/events/',
        'gallery' => 'storage/gallery/',
        'partners' => 'storage/partners/',
        'sliders' => 'storage/sliders/',
        'bloggers' => 'storage/bloggers/',
        'activities' => 'storage/activities/',
    ],
    'route-paths' => [
        'store' => 'store',
        'update' => 'update',
        'delete' => 'delete'
    ],
    'roles' => [
        'privileged' => [
            'super_privileged' => [
                'super_admin' => 'super_admin'
            ],
            'normal_privileged' => [
                'admin' => 'admin'
            ]
        ],
        'unprivileged' => [
            'user' => 'user'
        ]
    ],
    'super-admins' => ['elezovic3388@gmail.com', 'ribiczijah@gmail.com', 'almir_zukan@yahoo.com', 'budimirivan0@gmail.com', 'info@katrieldev.com']
];