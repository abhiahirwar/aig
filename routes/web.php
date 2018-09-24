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
    return 'FAQ!';
});


Route::get('/about', function() {
    return view('about');
});


Route::get('/warranty', function() {
    return 'Warranty!';
});

Route::get('/products', function() {
    return 'Products!';
});

Route::get('/glass-options', function() {
    return 'Glass Options!';
});

Route::get('/contact', function() {
    return 'Contact!';
});

Route::get('/spec', function() {
    return 'Hello World!';
});
