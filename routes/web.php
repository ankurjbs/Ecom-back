<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteGroup;

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
    return view('dashboard');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');



Auth::routes();

Route::group(['middleware'=>['auth']],function(){
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // product add
    Route::get('/addProduct', [AdminController::class, 'productNew'])->name('addProduct');
});


