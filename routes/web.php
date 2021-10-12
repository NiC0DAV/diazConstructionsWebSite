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

Route::get('/laravel', function () {
    return view('welcome');
});


Route::get('/', 'App\Http\Controllers\IndexController@index');

Route::resource('/newReview', 'App\Http\Controllers\ReviewsController');

Route::get('/admDashboard/{id}', 'App\Http\Controllers\WebContentController@dashBoardView');

Route::post('/admDashboard/newWebContent', 'App\Http\Controllers\WebContentController@webContentInsert');

Route::post('/admDashboard/updateWebContent/{id}', 'App\Http\Controllers\WebContentController@updateWebContent');

Route::post('/admDashboard/newImage', 'App\Http\Controllers\ImagesController@imagesUpload');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
