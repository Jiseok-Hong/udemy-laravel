<?php

use Illuminate\Support\Facades\Route;

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
    return '<h1>homepage</h1>';
})->name('base.index');


Route::get('/main', function () {
    return view('welcome');
})->name('main.index');


Route::get('/home', function () {
    return view('home.index');
})->name('home.index');


Route::get('/blog/{id}/{random?}', function ($blogId, $ageId = 0) {
    return 'homepage ' . $blogId . $ageId;
})->name('home.index');