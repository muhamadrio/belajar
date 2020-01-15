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
    return view('welcome');
});
Route::get('/belajar', function () {
    echo"belajar PHP.Tulisan ini ditampilkan dari wandy ";
});
Route::get('/belajar1', function () {
    echo"Hello World guys ";
});
Route::get('/belajar2', function () {
    echo"Hello World wandy ";
});
Route::get('/belajar3', function () {
    echo"hello world guys ";
});

Route::get('/about', function () {
    return view('about');
});