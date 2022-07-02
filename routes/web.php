<?php

use App\Http\Controllers\HomeController;
use GuzzleHttp\Psr7\Request;
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


Route::get('/home', [HomeController::class, 'home'])->name('home.index');


$posts = [
        1 => [
            "name" => "Ji",
            "new" => true
        ],
        2 => [
            "name" => "Hong",
            "new" => false
        ],
        3 => [
            "name" => "Seok",
            "new" => true
        ]];

Route::get('/blog', function ($blogId, $ageId = 0){

    return "abc";
})->name('blog.index');

Route::get('/blog/response', function() use($posts){
    $limit = request()->all();
    echo $limit;
    return 
        response($posts, 201)
        ->header('Content-Type', "application/json")
        ->cookie("MY_COOKIE", 'John Hong', 10); 
});

Route::get('/blog/{id}/{random?}', function ($blogId, $ageId = 0) use($posts){

    abort_if(!isset($posts[$blogId]), 404);
    return view('blog.index', [
        "posts" => $posts[$blogId], 
        "age" => $ageId]);
})->name('home.index');


