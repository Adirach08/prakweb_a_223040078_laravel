<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Adi Rachmansyah', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Adi Rachmansyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, maxime ea!
                        Repellendus veniam deserunt quas nobis ex molestias laboriosam excepturi,
            dolor aspernatur eveniet eligendi architecto nam incidunt magnam culpa. Quos?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Adi Rachmansyah',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut necessitatibus possimus
    velit libero culpa ullam excepturi eveniet officiis, suscipit consectetur consequatur
    assumenda at harum quas qui odio! Odit, reiciendis accusamus.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Adi Rachmansyah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, maxime ea!
                        Repellendus veniam deserunt quas nobis ex molestias laboriosam excepturi,
            dolor aspernatur eveniet eligendi architecto nam incidunt magnam culpa. Quos?'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Adi Rachmansyah',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut necessitatibus possimus
    velit libero culpa ullam excepturi eveniet officiis, suscipit consectetur consequatur
    assumenda at harum quas qui odio! Odit, reiciendis accusamus.'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
