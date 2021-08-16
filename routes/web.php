<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EfranchiseController;
use Illuminate\Support\Facades\Auth;

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
    return view('auth/login');
});

Auth::routes();

//Admin
Route::group(['middleware' => 'App\Http\Middleware\isAdmin'], function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/memberlist', function () { return view('admin.member'); });
    Route::get('/manpower', function () { return view('admin.manpower'); });
    Route::get('/store', function () { return view('admin.store'); });
});

//Efranchisee
Route::group(['middleware' => 'App\Http\Middleware\isEfranchise'], function () {
    Route::get('/efranchisee', [App\Http\Controllers\EfranchiseController::class, 'index'])->name('efranchisee');
    Route::get('/tagrider', function () { return view('efranchise.tagrider'); });
    Route::get('/tagstore', function () { return view('efranchise.tagstore'); });
});

