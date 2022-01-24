<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;

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

Route::get('/',[FrontController::class,'index'])->name('font');
Route::get('/category-product/{id}',[CategoryController::class,'categoryProduct'])->name('category-product');


//visitor
Route::get('/visitor',[VisitorController::class,'index'])->name('visitor');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.master');
})->name('dashboard');
//category
Route::get('/add-category',[CategoryController::class,'index'])->name('add-category');
Route::post('save-category',[CategoryController::class,'saveCategory'])->name('new-category');
Route::get('/manage-category',[CategoryController::class,'manageCategory'])->name('manage-category');
Route::get('/unpublished-category/{id}',[CategoryController::class,'unpublishedCategory'])->name('unpublished-category');
Route::get('/published-category/{id}',[CategoryController::class,'publishedCategory'])->name('published-category');
Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('edit-category');
Route::post('/update-category',[CategoryController::class,'updateCategory'])->name('update-category');
Route::get('/delete-category/{id}',[CategoryController::class,'deleteCategory'])->name('delete-category');
//brand
Route::get('/add-brand',[BrandController::class,'addBrand'])->name('add-brand');
Route::post('save-brand',[BrandController::class,'saveBrand'])->name('new-brand');
Route::get('/manage-brand',[BrandController::class,'manageBrand'])->name('manage-brand');
Route::get('/unpublished-brand/{id}',[BrandController::class,'unpublishedBrand'])->name('unpublished-brand');
Route::get('/published-brand/{id}',[BrandController::class,'publishedBrand'])->name('published-brand');
Route::get('/edit-brand/{id}',[BrandController::class,'editBrand'])->name('edit-brand');
Route::post('/update-brand',[BrandController::class,'updateBrand'])->name('update-brand');
Route::get('/delete-brand/{id}',[BrandController::class,'deletebrand'])->name('delete-brand');
Route::get('/manage-brand',[BrandController::class,'manageBrand'])->name('manage-brand');
//product
Route::get('/add-product',[ProductController::class,'addProduct'])->name('add-product');
Route::post('/save-product',[ProductController::class,'saveProduct'])->name('new-product');
Route::get('/manage-product',[ProductController::class,'manageProduct'])->name('manage-product');
Route::get('/unpublished-product/{id}',[ProductController::class,'unpublishedProduct'])->name('unpublished-product');
Route::get('/published-product/{id}',[ProductController::class,'publishedProduct'])->name('published-product');
Route::get('/edit-product/{id}',[ProductController::class,'editProduct'])->name('edit-product');
Route::post('/update-product',[ProductController::class,'updateProduct'])->name('update-product');
Route::get('/delete-product/{id}',[ProductController::class,'deleteProduct'])->name('delete-product');
Route::get('/manage-product',[ProductController::class,'manageProduct'])->name('manage-product');


Route::get('/manage-product',[ProductController::class,'manageProduct'])->name('manage-product');

