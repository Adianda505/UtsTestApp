<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/pages/dashboard');
});

Route::view('/pages/dashboard',  'pages.dashboard')->name('admin.dashboard');
Route::view('/pages/products',   'pages.products')->name('admin.products');
Route::view('/pages/reports',    'pages.customers')->name('admin.customers');
Route::view('/pages/statistics', 'pages.transaction')->name('admin.transaction');
Route::view('/pages/settings',  'pages.settings')->name('admin.settings');