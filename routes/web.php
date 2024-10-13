<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('homepage');
})->name('homepage');


Route::get('/announcement', function () {
    return view('announcement');
})->name('announcement');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/shop-category', function () {
    return view('shop-category');
})->name('shop-category');

Route::get('/shop-items', function () {
    return view('shop-items');
})->name('shop-items');

Route::get('/ind', function () {
    return view('ind');
})->name('ind');