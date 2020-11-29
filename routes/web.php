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

//Route::get('/basket', function () {
//    return view('basket');
//});

Route::get('/basket', [\App\Http\Controllers\BasketController::class, 'index'])->name('basket');
Route::get('/deletefrombasket/{id}', [\App\Http\Controllers\BasketController::class, 'destroy'])->name('deletefrombasket');

Route::get('/profile', function () {
    return view('profile');
});
//
//Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'] )->name('index');
Route::get('/details/{id}', [\App\Http\Controllers\HomeController::class,'show'])->name('show');
Route::get('/profile', [\App\Http\Controllers\ProfileController::class,'index'])->name('profile');
//Auth:routes([
//
//]);
//Route::post('/signin', [\App\Http\Controllers\UserController::class,'show'])->name('signin');
//Route::post('/signin', 'UserController@show')->name('signin');

//Route::get('/suppliers', [\App\Http\Controllers\SupplierController::class,'show'])->name('show');


Route::get('/', 'HomeController@index')->name('home');

Route::get('/loginpage', [\App\Http\Controllers\Auth\LoginController::class, 'loginForm'])->name('loginform');
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'loginForm'])->name('login');
Route::post('/auth', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('auth');

Route::post('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'registerForm'])->name('registerform');
Route::post('/registration', [\App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('registration');

Route::get('/addtobasket/{id}', [\App\Http\Controllers\HomeController::class, 'addToBasket'])->name('addtobasket');

Route::get('/deleteproduct/{id}', [\App\Http\Controllers\HomeController::class, 'destroyProduct'])->name('deleteproduct');

//Auth::routes();
