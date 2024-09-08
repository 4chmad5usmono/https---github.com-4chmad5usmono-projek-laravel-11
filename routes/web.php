<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Achmad Susmono', 'title' => 'About' ]);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'title' =>'Judul Artikel 1',
            'author' => 'Achmad Susmono',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo quos atque adipisci asperiores quo quas inventore beatae facere earum nostrum vitae sunt deserunt, labore voluptates laudantium quia quisquam amet numquam!'
        ],
        [
            'title' =>'Judul Artikel 2',
            'author' => 'Achmad Susmono',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, ullam tenetur molestiae explicabo natus enim aliquam commodi cupiditate, saepe odit ducimus aperiam deleniti. At, possimus doloremque hic nam distinctio iste.'
        ]
    ] ]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

