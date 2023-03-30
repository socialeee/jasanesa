<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\User\TestpaymentController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\UserhomeController;


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
})->name('welcome');

// user
Route::resource('consultant', App\Http\Controllers\User\ConsultantController::class);
Route::resource('userolahraga', App\Http\Controllers\User\UserolahragaController::class);
Route::resource('home', App\Http\Controllers\User\UserhomeController::class);
Route::get('/cv/{id}', [UserhomeController::class, 'cv'])->name('cv');
Route::get('/diklathome', [UserhomeController::class, 'diklat'])->name('diklathome');
Route::get('diklat/pages/{id}', [UserhomeController::class, 'blog'])->name('blog');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/payment/{id}', [TestpaymentController::class, 'payment'])->name('payment');
    Route::get('/payment/show/{id}', [TestpaymentController::class, 'show'])->name('payment.show');
    Route::post('/payment/success', [TestpaymentController::class, 'store'])->name('payment.store');
    Route::post('/payment/booking', [TestpaymentController::class, 'booking'])->name('booking');
    Route::get('/payment/events', [TestpaymentController::class, 'event'])->name('events');
});
Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('welcome');
});
//end user


// admin
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {
    Route::resource('/user', App\Http\Controllers\Admin\UserController::class);
    // Route::resource('faculty', App\Http\Controllers\Admin\FacultyController::class);
    Route::resource('pakar', App\Http\Controllers\Admin\JasapakarController::class);
    Route::resource('fasol', App\Http\Controllers\Admin\FasilitasolahragaController::class);
    // Route::resource('diklat', App\Http\Controllers\Admin\DiklatController::class);
    Route::resource('arcom', App\Http\Controllers\Admin\FasilitasolahragaController::class);
    Route::resource('diklat', App\Http\Controllers\Admin\DiklatController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();
