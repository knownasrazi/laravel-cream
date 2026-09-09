<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Hand-crafted: simple view, no controller bloat for landing
    return view('welcome', ["tag" => "Laravel, refined."]);
});

Route::get('/posts/{slug}', function ($slug) {
    // In real would fetch from DB, here just demo
    return "Post: " . htmlspecialchars($slug);
});
