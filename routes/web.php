<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductControler;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/register', [RegisterController::class, 'showAdminRegistrationForm'])->name('admin.register');
Route::post('/admin/register', [RegisterController::class, 'createAdmin']);
Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('admin.login');
Route::post('/admin/login', [LoginController::class, 'adminLogin'])->name('admin.login');
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function () {
    Route::get('/', [ProductControler::class, 'index'])->name('admin.home');
    Route::get('/add-product', [ProductControler::class, 'add_product'])->name('admin.create');
    Route::get('/list-product', [ProductControler::class, 'list_product'])->name('admin.index');
    Route::get('/update-product', [ProductControler::class, 'update_product'])->name('admin.update');
    Route::get('/detail-product', [ProductControler::class, 'detail_product'])->name('admin.detail');
});

