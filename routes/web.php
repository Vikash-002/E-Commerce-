<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\homeController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', [homeController::class, 'index']);
// Route::get('/frontend/index',[UserController::class,'customerLogin']);
// Route::post('/frontend/store',[UserController::class,'store'])->name('user.store');
Route::get('/subcategory/{id}',[homeController::class,'subcategory']);
Route::get('/list',[homeController::class,'list']);

Route::get('productList/{id}',[homeController::class,'productList']);

