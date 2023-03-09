<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserhomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\TestpaymentController;
// use App\Http\Controllers\JasapakarController;
// use App\Http\Controllers\UserhomeController;

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

// Route::get('/olahraga', [UserolahragaController::class, 'olahraga'])->name('olahraga');
// Route::get('/pakar', [UserolahragaController::class, 'pakar'])->name('pakar');
// Route::get('/hukum', [UserolahragaController::class, 'hukum'])->name('hukum');
Route::get('/payment', [TestpaymentController::class, 'payment'])->name('payment');
Route::post('/payment/booking', [TestpaymentController::class, 'booking'])->name('booking');
Route::get('/payment/events', [TestpaymentController::class, 'event'])->name('events');

// user
Route::resource('consultant', App\Http\Controllers\User\ConsultantController::class);
Route::resource('userolahraga', App\Http\Controllers\User\UserolahragaController::class);
Route::resource('diklat', App\Http\Controllers\DiklatController::class);
//end user

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/user', App\Http\Controllers\Admin\UserController::class);
    Route::resource('faculty', App\Http\Controllers\Admin\FacultyController::class);
    Route::resource('pakar', App\Http\Controllers\Admin\JasapakarController::class);
    Route::resource('fasol', App\Http\Controllers\Admin\FasilitasolahragaController::class);
    Route::resource('peged', App\Http\Controllers\Admin\FasilitasolahragaController::class);
    Route::resource('arcom', App\Http\Controllers\Admin\FasilitasolahragaController::class);
});



// Route::resource('olahraga', App\Http\Controllers\FasilitasolahragaController::class);
// Route::get('/pakar', [HomeController::class, 'pakar'])->name('pakar');
// Route::get('/kategori', [HomeController::class, 'kategori'])->name('kategori');
// Route::get('/payment', [UserolahragaController::class, 'payment'])->name('payment');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
