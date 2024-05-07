<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommandController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Database\Factories\ProductFactory;
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

// Route::get('/', function () {
//     return view('home');
// });


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('category', CategoryController::class);
Route::resource('product', ProductController::class);
Route::resource('command', CommandController::class);
Route::resource('admin', AdminController::class);
Route::resource('user', UserController::class);
Route::resource('email', EmailController::class);

Route::get('/adminPanel', [AdminController::class, 'index'])->name('admin.index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/filter', [ProductController::class, 'filter'])->name('filter');
Route::get('/infos', [EmailController::class, 'infos'])->name('infos');

Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
Route::get('/categories', [AdminController::class, 'categories'])->name('admin.categories');
Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
Route::get('/commands', [AdminController::class, 'commands'])->name('admin.commands');
Route::get('/profil', [HomeController::class, 'profil'])->name('user.profil');
