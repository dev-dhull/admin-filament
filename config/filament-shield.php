<?php

return [
    
    'shield_resource' => [
        'slug' => 'shield/roles',
        'navigation_sort' => -1,
        'navigation_badge' => true
    ],

    'auth_provider_model' => [
        'fqcn' => 'App\\Models\\User'
    ],

    'super_admin' => [
        'enabled' => true,
        'name'  => 'super_admin'
    ],

    'filament_user' => [
        'enabled' => true,
        'name' => 'filament_user'
    ],

    'permission_prefixes' => [
        'resource' => [
            'view',
            'create',
            'update',
            'restore',
            'delete',
        ],

        'page' => 'page',
        'widget' => 'widget',
    ],

    'entities' => [
        'pages' => true,
        'widgets' => true,
        'resources' => true,
        'custom_permissions' => true,
    ],

    'generator' => [
        'option' => 'policies_and_permissions'
    ],

    'exclude' => [
        'enabled' => true,

        'pages' => [
            'Dashboard',
        ],

        'widgets' => [
            'AccountWidget','FilamentInfoWidget',
        ],

        'resources' => [],
    ],

    'register_role_policy' => [
        'enabled' => false
    ],
];
