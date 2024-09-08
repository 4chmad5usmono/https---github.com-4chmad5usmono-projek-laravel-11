<?php

use Illuminate\Support\Arr;
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
            'id' =>1,
            'slug' => 'judul-artikel-1',
            'title' =>'Judul Artikel 1',
            'author' => 'Achmad Susmono',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo quos atque adipisci asperiores quo quas inventore beatae facere earum nostrum vitae sunt deserunt, labore voluptates laudantium quia quisquam amet numquam!'
        ],
        [
            'id' =>2,
            'slug' => 'judul-artikel-2',
            'title' =>'Judul Artikel 2',
            'author' => 'Achmad Susmono',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, ullam tenetur molestiae explicabo natus enim aliquam commodi cupiditate, saepe odit ducimus aperiam deleniti. At, possimus doloremque hic nam distinctio iste.'
        ]
    ] ]);
});

Route::get('/posts/{slug}', function($slug) {
     $posts=[
        [
            'id' =>1,
            'slug' => 'judul-artikel-1',
            'title' =>'Judul Artikel 1',
            'author' => 'Achmad Susmono',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo quos atque adipisci asperiores quo quas inventore beatae facere earum nostrum vitae sunt deserunt, labore voluptates laudantium quia quisquam amet numquam!'
        ],
        [
            'id' =>2,
            'slug' => 'judul-artikel-2',
            'title' =>'Judul Artikel 2',
            'author' => 'Achmad Susmono',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, ullam tenetur molestiae explicabo natus enim aliquam commodi cupiditate, saepe odit ducimus aperiam deleniti. At, possimus doloremque hic nam distinctio iste.'
        ]
        ];

    $post =Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    } );

    return view('post',['title' => 'Single Post', 'post' => $post ]);
} );

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

