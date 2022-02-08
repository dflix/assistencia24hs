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
    return view('welcome' ,);
});

Route::get('/contato', function () {
    return view('contact');
});

Route::get('/quem-somos', function () {
    return view('who-we-are');
});

Route::get('/beneficios', function () {
    return view('benefits');
});


Route::get('/assistencia-24hs', function () {
    return view('24-hours-assistance');
});


Route::get('/contrate', function () {
    return view('hire');
});

