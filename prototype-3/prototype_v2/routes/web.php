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


// //home route
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// //categorie route
// Route::resource('categorie', App\Http\Controllers\CategorieController::class);
// Route::get('/categories', [App\Http\Controllers\CategorieController::class, 'index'])->name('Categories');
// //prodact route
// Route::get('/prodact', [App\Http\Controllers\MaterailController::class, 'index'])->name('home');
// Route::get('/prodact/{categorie}/categorie', [App\Http\Controllers\MaterailController::class, 'getMaterailByCategory'])->name('prodact.categorie');
// //cart routes 
// Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
// Route::post('/add/cart/{prodact}', [App\Http\Controllers\CartController::class, 'addProdactToCart'])->name('add.cart');
// Route::put('/update/{prodact}/cart', [App\Http\Controllers\CartController::class, 'updateProdactOnCart'])->name('update.cart');
// Route::delete('/add/{prodact}/cart', [App\Http\Controllers\CartController::class, 'removeProdactFormCart'])->name('remove.cart');
// //admin routes 
// Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
// Route::get('/admin/login', [App\Http\Controllers\AdminController::class, 'ShowAdminLoginForm'])->name('admin.login');
// Route::post('/admin/login', [App\Http\Controllers\AdminController::class, 'adminLogin'])->name('admin.login');
// Route::get('/admin/logout', [App\Http\Controllers\AdminController::class, 'adminLogout'])->name('admin.logout');
//admin materail routes 
Route::get('/admin/materail',[App\Http\Controllers\MaterailController::class, 'index']);
Route::get('/admin/add/materail',[App\Http\Controllers\MaterailController::class, 'create'])->name('form.materail');
Route::post('/admin/add/materail',[App\Http\Controllers\MaterailController::class, 'store']);
Route::get('/admin/edit/materail/{materail}',[App\Http\Controllers\MaterailController::class, 'edit'])->name('edit.materail');
Route::put('/admin/edit/materail/{materail}',[App\Http\Controllers\MaterailController::class, 'update']);
Route::delete('/admin/delet/materail/{materail}',[App\Http\Controllers\MaterailController::class, 'destroy']);

//admin categorie routes 
Route::get('/admin/categorie',[App\Http\Controllers\CategorieController::class, 'adminIndex']);
Route::get('/admin/add/categorie',[App\Http\Controllers\CategorieController::class, 'create'])->name('form.categorie');
Route::post('/admin/add/categorie',[App\Http\Controllers\CategorieController::class, 'store']);