<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevotionController;
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
    return view('auth.login');
});

Auth::routes();


Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::view('/devotions', 'devotions/index')->name('devotions');

    Route::group(['prefix' => 'devotions'], function() {
        Route::controller(DevotionController::class)->group(function() {
            Route::post('/devotion/store', 'store')->name('devotions.devotion.store');
            Route::get('/devotion/fetch', 'fetch')->name('devotions.devotion.fetch');
        });
    });
   

});