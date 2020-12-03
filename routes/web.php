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
//There is 2 things in routing  (url,page)
Route::get('/', function () {

    //return view('welcome');
    return redirect('hello');
});

Route::get('/{name}', function ($name) {
    //echo $name;
    return view('hello', ['name' => $name]);
});

Route::get('/about', function () {
    return view('about');
});

//we can also use a short hand
//URL     //Page
Route::view('contact', 'contact');
//Note :  We can provide any name in URL e.g xyz
