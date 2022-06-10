<?php
return [
    [
        'slug' => 'user::index',
        'title' => 'Benutzer',
        'route' => 'user::index',
    ],
    [
        'slug' => 'user::edit.base',
        'title' => 'Benutzer bearbeiten',
        'parent' => 'user::index',
        'route' => 'user::edit.base',
    ],
];
