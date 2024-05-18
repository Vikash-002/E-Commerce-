<?php
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BrandController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\OrderController;
use App\Http\Controllers\backend\SubCategoriesController;
use  App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\backend\SliderController;



Route::prefix("admin")->group(function(){
Route::get('/',[AdminController::class,'index']);
//Route::get('/admin/dash',[AdminController::class,'dash']);
Route::post('/login',[AdminController::class,'login']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);


// brand

 Route::get('/brand',[BrandController::class,'index'])->name('brands');
 Route::get('brand/create',[BrandController::class,'create'])->name('brand.create');
 Route::post('brand/store',[BrandController::class,'store'])->name('brand.store'); # for storing record in DB
 Route::get('brand/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
 Route::post('brand/update/{id}',[BrandController::class,'update'])->name('brand.update'); 
 Route::get('brand/delete/{id}',[BrandController::class,'destroy'])->name('brand.delete');
 
 // Users
 Route::get('/user',[UserController::class,'index'])->name('users');
 Route::get('user/create',[UserController::class,'create'])->name('user.create');
 Route::post('user/store',[UserController::class,'store'])->name('user.store');  # for storing record db
 Route::get('user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
 Route::post('user/update/{id}',[UserController::class,'update'])->name('user.update');
 Route::get('user/delete/{id}',[UserController::class,'destroy'])->name('user.delete');

 // SubCategories

 Route::get('/subcategory',[SubCategoriesController::class,'index'])->name('subacategories');
 Route::get('subcategory/create',[SubCategoriesController::class,'create'])->name('subcategory.create');
 Route::post('subcategory/store',[SubCategoriesController::class,'store'])->name('subcategory.store');  # for storing record db
 Route::get('subcategory/edit/{id}',[SubCategoriesController::class,'edit'])->name('subcategory.edit');
 Route::post('subcategory/update/{id}',[SubCategoriesController::class,'update'])->name('subcategory.update');
 Route::get('subcategory/delete/{id}',[SubCategoriesController::class,'destroy'])->name('subcategory.delete');


//category
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store'); # for storing record in DB
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('category/delete/{id}',[CategoryController::class,'destroy'])->name('category.delete');



//Products
Route::get('/product',[ProductController::class,'index'])->name('products');
Route::get('product/create',[ProductController::class,'create'])->name('product.create');
Route::post('product/store',[ProductController::class,'store'])->name('product.store');  # Store data 
Route::get('product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');
Route::get('product/show/{id}',[ProductController::class,'show'])->name('product.show');

// Slider
Route::get('/slider',[SliderController::class,'index'])->name('sliders');
Route::get('slider/create',[SliderController::class,'create'])->name('slider.create');
Route::post('slider/store',[SliderController::class,'store'])->name('slider.store');
Route::get('slider/edit/{id}',[SliderController::class,'edit'])->name('slider.edit');
Route::post('slider/update/{id}',[SliderController::class,'update'])->name('slider.update');
Route::get('slider/delete/{id}',[SliderController::class,'destroy'])->name('slider.delete');


});



?>