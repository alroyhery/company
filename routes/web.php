<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;

// Route::get('/', function () {
//     return view('crud.about.index');
// });

//dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


//about us
Route::get('/about-us', [AboutController::class, 'index'])->name('about.view');
Route::post('/about/table', [AboutController::class, 'AboutTable'])->name('about.table');
Route::post('/about/add', [AboutController::class, 'AboutCreate'])->name('about.add');
Route::post('/about/delete', [AboutController::class, 'AboutDelete'])->name('about.delete');
Route::post('/about/update', [AboutController::class, 'AboutUpdate'])->name('about.update');

//contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact.view');
Route::post('/contact/table', [ContactController::class, 'ContactTable'])->name('contact.table');
Route::post('/contact/add', [ContactController::class, 'ContactCreate'])->name('contact.add');
Route::post('/contact/delete', [ContactController::class, 'ContactDelete'])->name('contact.delete');
Route::post('/contact/update', [ContactController::class, 'ContactUpdate'])->name('contact.update');

//product
Route::get('/product', [ProductController::class, 'index'])->name('product.view');
Route::post('/product/table', [ProductController::class, 'ProductTable'])->name('product.table');
Route::post('/product/add', [ProductController::class, 'ProductCreate'])->name('product.add');
Route::post('/product/delete', [ProductController::class, 'ProductDelete'])->name('product.delete');
Route::post('/product/update', [ProductController::class, 'ProductUpdate'])->name('product.update');


//landing
Route::get('/home', [LandingController::class, 'index'])->name('landing.home');
Route::get('/service', [LandingController::class, 'service'])->name('landing.service');
Route::get('/about', [LandingController::class, 'about'])->name('landing.about');
