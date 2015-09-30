<?php

return [
    'name' => "L5 Blog",
    'title' => "Laravel 5.1 Beauty Blog",
    'subtitle' => 'A clean blog written in Laravel 5.1',
    'description' => 'This is my meta description',
    'author' => 'Christos Lytras',
    'contact_email' => env('MAIL_FROM'),
    'page_image' => 'main-bg.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'uploads' => [
        'storage' => 'local',
        'webpath' => '/uploads',
    ]
];