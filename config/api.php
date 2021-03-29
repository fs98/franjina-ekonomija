<?php
return [
    'statuses' => [
        'active' => 'active',
        'inactive' => 'inactive'
    ],
    'storage_paths' => [
        'users' => 'public/users/',
        'posts' => 'public/posts/', 
    ],
     'storage_paths_v2' => [
        'users' => 'storage/users/',
        'posts' => 'storage/posts/', 
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