<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/faq', function() {
    return view('faq');
});


Route::get('/about', function() {
    return view('about');
});


Route::get('/warranty', function() {
    return view('warranty');
});

Route::get('/products', function() {
    return view('products');
});

Route::get('/glass-options', function() {
    return view('glass-options');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/spec', function() {
    return view('spec');
});

Route::get('/toc', function() {
    return view('toc');
});
