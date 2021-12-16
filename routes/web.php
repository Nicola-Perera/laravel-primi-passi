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

        return view('home');
});

// navbar links
Route::get('/name', function () {
    $name = 'Nicola';
    
        return view('name', compact('name'));
    });

Route::get('/surname', function () {
    $surname = 'Perera';

        return view('surname', compact('surname'));
});

Route::get('/age', function () {
    $age = '25';
    
        return view('age', compact('age'));
    });

Route::get('/class', function () {
    $class = '42';

        return view('class', compact('class'));
});
