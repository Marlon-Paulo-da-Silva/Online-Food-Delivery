<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Category */

Route::get('/category/add', [CategoryController::class, 'index'])->name('show_cate_table');
Route::post('/category/save', [CategoryController::class, 'save'])->name('cate_save');
Route::get('/category/manage', [CategoryController::class, 'manage'])->name('cate_manager');
Route::get('/category/active/{id}', [CategoryController::class, 'active'])->name('cate_active');
Route::get('/category/inactive/{id}', [CategoryController::class, 'inactive'])->name('cate_inactive');

/* End Category */



