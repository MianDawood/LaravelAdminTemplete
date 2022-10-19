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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/datatables', function () {
    return view('datatables');
});

Route::get('/users', function () {
    return view('userlist');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/formadvance', function () {
    return view('formadvance');
});

Route::get('/profile', function () {
    return view('profile');
});
