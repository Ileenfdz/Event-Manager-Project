<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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
    return view('frontpage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/events/admin', function () {
    return view('events.admin');
});

Route::get('events/admin/create', function () {
    return view('events.create');
});

Route::get('/events', function () {
    return view('events.index');
});

// Auth::routes();

Route::resource('events', 'App\Http\Controllers\EventController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');