<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DeliveryPersonController;

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
// Crud Category

Route::get('/category/add', [CategoryController::class, 'index'])->name('show_cate_table')->middleware('auth');
Route::post('/category/save', [CategoryController::class, 'save'])->name('cate_save')->middleware('auth');
Route::get('/category/manage', [CategoryController::class, 'manage'])->name('cate_manager')->middleware('auth');



Route::get('/category/active/{id}', [CategoryController::class, 'active'])->name('cate_active');
Route::get('/category/inactive/{id}', [CategoryController::class, 'inactive'])->name('cate_inactive');
Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('cate_delete');
Route::post('/category/update', [CategoryController::class, 'update'])->name('cate_update');

/* End Category */

// Crud DeliveryPerson

Route::get('/deliveryperson/add', [DeliveryPersonController::class, 'index'])->name('show_dp_table')->middleware('auth');
Route::post('/deliveryperson/save', [DeliveryPersonController::class, 'deliveryperson_save'])->name('dp_save')->middleware('auth');
Route::get('/deliveryperson/manage', [DeliveryPersonController::class, 'deliveryperson_manage'])->name('dp_manager')->middleware('auth');


// Route::get('/deliveryperson/active/{id}', [CategoryController::class, 'active'])->name('deliperson_active');
// Route::get('/deliveryperson/inactive/{id}', [CategoryController::class, 'inactive'])->name('deliperson_inactive');
// Route::get('/deliveryperson/delete/{id}', [CategoryController::class, 'delete'])->name('deliperson_delete');
// Route::post('/deliveryperson/update', [CategoryController::class, 'update'])->name('deliperson_update');

/* End DeliveryPerson */



