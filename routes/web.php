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
    $user = 'Romy';
    return view('welcome', compact('user'));
});

Route::get('chi-siamo', function () {
    $us = 'noi di classe23';
    return view('chi-siamo', compact('us'));
});

Route::get('cosa-facciamo', function () {
    $us = 'noi di classe23';
    return view('cosa-facciamo', compact('us'));
});

Route::get('la-nostra-storia', function () {
    $story = 'siamo vecchi';
    return view('la-nostra-storia', compact('story'));
});

Route::get('contattaci', function () {
    return view('contattaci');
});