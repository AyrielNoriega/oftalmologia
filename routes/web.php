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
    return view('front.index');
});
Route::get('shop', function () {
    return view('front.shop');
});
Route::get('edit', function () {
    return view('users.edit');
});
Route::get('about', function () {
    return view('front.about');
});
 
 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
// Route::get('index', [App\Http\Controllers\HomeController::class, 'index2']);
