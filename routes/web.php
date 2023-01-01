<?php

use App\Http\Controllers\BlogCommentController;
use App\Http\Controllers\UserController;
use App\Models\Blogs;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ListingsController;
use App\Http\Controllers\PortfolioController;
use \App\Http\Controllers\ContactsController;

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
// Portfolio Index
Route::get('/', [PortfolioController::class, 'index']);

// Submit Contact
Route::post('/', [ContactsController::class, 'store']);

// Portfolio About
Route::get('/about', [PortfolioController::class, 'about']);

// Portfolio Projects
Route::get('/listings', [ListingsController::class, 'index']);

// Single project
Route::get('/listings/{listing}', [ListingsController::class, 'show']);

// Blogs
Route::get('/blogs', [BlogsController::class, 'index']);

// Single Blog
Route::get('/blogs/{blog}',  [BlogsController::class, 'show']);

Route::post('/blogs/{blog}', [BlogCommentController::class, 'store']);



// ADMIN
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

Route::get('/admin/addblog', [AdminController::class, 'blog'])->middleware('auth');

Route::post('/admin/addblog', [BlogsController::class, 'store'])->middleware('auth');

Route::get('/admin/editblog', [AdminController::class, 'edit'])->middleware('auth');

Route::get('/admin/editblog/{blog}/edit', [BlogsController::class, 'edit'])->middleware('auth');

Route::put('/admin/editblog/{blog}', [BlogsController::class, 'update'])->middleware('auth');

Route::delete('/admin/editblog/{blog}', [BlogsController::class, 'destroy'])->middleware('auth');

Route::get('/admin/addproject', [AdminController::class, 'project'])->middleware('auth');

Route::post('/admin/addproject', [ListingsController::class, 'store'])->middleware('auth');

Route::get('/admin/editproject', [AdminController::class, 'editproject'])->middleware('auth');

Route::get('/admin/editproject/{listing}/edit', [ListingsController::class, 'edit'])->middleware('auth');

Route::put('/admin/editproject/{listing}', [ListingsController::class, 'update'])->middleware('auth');

Route::delete('/admin/editproject/{listing}', [ListingsController::class, 'destroy'])->middleware('auth');

Route::get('/register', [UserController::class, 'create'])->middleware('auth');

Route::post('/users', [UserController::class, 'store'])->middleware('auth');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

