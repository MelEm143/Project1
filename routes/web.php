<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/about-us', function (){
    return view ('about');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/sign-up', function () {
    return view('signup');
});

Route::post('/acceptRegistration',[UserController::class, 'saveRegistration'])->name('saveRegistration');
Route::post('/userAuthentication',[UserController::class, 'userAuth'])->name('userAuth');

Route::get('/login',[UserController::class, 'login'])->name('login');
Route::get('/logout',[UserController::class, 'logout'])->name('logout');