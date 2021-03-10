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
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});
Route::get('/management', function () {
    return view('management');
});
Route::get('/specialized', function () {
    return view('specialized');
});
Route::get('/promote', function () {
    return view('promote');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/commercial', function () {
    return view('commercial');
});
Route::get('/industrial', function () {
    return view('industrial');
});
Route::get('/residential', function () {
    return view('residential');
});
Route::get('/employment', function () {
    return view('employment');
});
Route::get('/contact', function () {
    return view('contact');
});
