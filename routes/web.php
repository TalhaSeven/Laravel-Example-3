<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/contact', [ContactController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

//Route::redirect('home','contact');

Route::get('/product', ProductController::class);

Route::resource('/blog', BlogController::class);

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('checkAuth');

Route::post('/login', [LoginController::class, 'loginpost'])->name('loginpost');

Route::group(['middleware' => 'checkUser'], function () {

    Route::get('/image', [ImageController::class, 'show'])->name('show');

    Route::post('/image', [ImageController::class, 'uploadImage'])->name('uploadImage');

    Route::get('/customer', [CustomerController::class, 'index'])->name('index');

    Route::get('/address', [AddressController::class, 'index'])->name('index');
 
    Route::get('/category', [CategoryController::class, 'index'])->name('category');

    Route::get('/shop', [ShopController::class, 'index'])->name('index');

});