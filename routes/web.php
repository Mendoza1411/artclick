<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', function () {
    return view('customer.homepage');
})->name('homepage');


Route::get('/announcement', function () {
    return view('customer.announcement');
})->name('announcement');

Route::get('/contact', function () {
    return view('customer.contact');
})->name('contact');

Route::get('/shop-category', function () {
    return view('customer.shop-category');
})->name('shop-category');

Route::get('/shop-items', function () {
    return view('customer.shop-items');
})->name('shop-items');

Route::get('/ind', function () {
    return view('customer.ind');
})->name('ind');