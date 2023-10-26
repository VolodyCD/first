<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[\App\Http\Controllers\MainController::class, 'home']);
Route::get('/about',[\App\Http\Controllers\MainController::class, 'about']);
Route::get('/review',[\App\Http\Controllers\MainController::class, 'review'])->name('review');
Route::post('/review/check',[\App\Http\Controllers\MainController::class, 'review_check']);


//Route::get('/user/{id}/{name}', function ($id, $name) {   // отслеживание динамического параметра
 //   return 'ID'. $id.'Name'. $name;
//});
