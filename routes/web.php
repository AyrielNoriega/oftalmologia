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
Route::get('citas', function () {
    return view('services.citas');
});

 
 
Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/user/pacientes', [App\Http\Controllers\UserController::class, 'pacientes']);
Route::get('/user/medicos', [App\Http\Controllers\UserController::class, 'medicos']);
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::post('user/create', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::post('/user/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::get('/user/{id}', [App\Http\Controllers\UserController::class, 'show']);

Route::view('/home/ordenes', 'services.ordenes');
Route::view('/home/admin', 'services.admin.index');

// Route::get( '/orden/all', [App\Http\Controllers\OrderController::class, 'index'])->name('orden.all');
Route::get( '/ajaxResponseOrders', [App\Http\Controllers\OrderController::class, 'ajaxResponseOrders'])->name('ajaxResponseOrders');
Route::get( '/ajaxOrders/{id}', [App\Http\Controllers\OrderController::class, 'index']);
Route::get( '/home/showorder/{id}', [App\Http\Controllers\OrderController::class, 'show'])->name('show.order');
Route::post( '/home/store', [App\Http\Controllers\OrderController::class, 'store'])->name('store.order');

Route::get( '/medico', [App\Http\Controllers\OrderController::class, 'index'])->name('medico.orders');
Route::get( '/medico/all', [App\Http\Controllers\MedicoController::class, 'index'])->name('medico.all');
Route::post( '/medico/create', [App\Http\Controllers\MedicoController::class, 'store'])->name('medico.store');
Route::get( '/medico/home', [App\Http\Controllers\MedicoController::class, 'home'])->name('medico.home');

Route::get( '/cita/all', [App\Http\Controllers\CitaController::class, 'index'])->name('cita.index');
Route::post( '/cita/store', [App\Http\Controllers\CitaController::class, 'store'])->name('cita.store');
Route::get( '/cita/user', [App\Http\Controllers\CitaController::class, 'show'])->name('citas.user');
Route::get( '/ajaxCitas/{id}', [App\Http\Controllers\CitaController::class, 'ajaxCitas']);


 

 

// Route::get('index', [App\Http\Controllers\HomeController::class, 'index2']);
