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

Route::get('/admDashboard', 'App\Http\Controllers\WebContentController@dashBoardView');

// Reviews

Route::get('/newReview', 'App\Http\Controllers\ReviewsController@reviewsView');

Route::post('/newReview/create', 'App\Http\Controllers\ReviewsController@createReview');

Route::get('/admDashBoard/reviewsCheck', 'App\Http\Controllers\ReviewsController@reviewsCheck');

Route::get('/admDashBoard/reviewsCheck/{id}/delete', 'App\Http\Controllers\ReviewsController@destroy');

Route::get('/admDashBoard/reviewsCheck/statusChange/{id}', 'App\Http\Controllers\ReviewsController@reviewsStatusChange');

Route::get('/admDashBoard/reviewsCheck/statusChange/{id}/edit', 'App\Http\Controllers\ReviewsController@reviewStatusEdit');

// Contenido Web (texto)

Route::get('/admDashboard/newWebContent', 'App\Http\Controllers\WebContentController@createWebContentView');

Route::post('/admDashboard/newWebContent/create', 'App\Http\Controllers\WebContentController@webContentInsert');

Route::get('/admDashboard/updateWebContent/{id}', 'App\Http\Controllers\WebContentController@updateWebContentView');

Route::post('/admDashboard/updateWebContent/{id}/edit', 'App\Http\Controllers\WebContentController@updateWebContent');

// Administración de imagenes

Route::get('/admDashBoard/imagesView', 'App\Http\Controllers\ImagesController@imagesView');

Route::delete('/admDashBoard/imagesView/{id}/delete', 'App\Http\Controllers\ImagesController@destroy');

Route::get('/admDashBoard/imagesView/create', 'App\Http\Controllers\ImagesController@imagesCreateView');

Route::post('/admDashBoard/imagesView/upload', 'App\Http\Controllers\ImagesController@imagesUpload');

Route::get('/admDashBoard/imagesView/{id}/edit', 'App\Http\Controllers\ImagesController@editImagesCreateView');



Route::get('/admDashboard/updateImage/{id}', 'App\Http\Controllers\ImagesController@editImage');

Route::put('/admDashboard/updateImage/{id}/edit', 'App\Http\Controllers\ImagesController@updateImage');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
