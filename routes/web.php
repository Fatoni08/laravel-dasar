<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [ProductController::class, 'fatoni']);

// Route::get('/sukoharjo', [ProductController::class, 'fatoni']);


Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'storeLogin']);

Route::middleware('auth')->group(function(){
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/index', [ProductController::class, 'index']);
    Route::get('/report', [ProductController::class, 'report']);
    Route::get('/create', [ProductController::class, 'createProduct']);
    Route::post('/store', [ProductController::class, 'storeProduct']);
    Route::get('/{productID}/edit', [ProductController::class, 'edit']);
    Route::post('/{productID}/update', [ProductController::class, 'update']);
    Route::get('/{productID}/delete', [ProductController::class, 'delete']);

    Route::get('/class', [ClassController::class, 'index']);
    Route::get('/class/create', [ClassController::class, 'create']);
    Route::post('/class/store', [ClassController::class, 'store']);

    Route::get('/{classID}/student', [StudentController::class, 'index']);
    Route::get('/{classID}/student/create', [StudentController::class, 'create']);
    Route::post('/{classID}/student/store', [StudentController::class, 'store']);
    Route::get('/{studentID}/student/assign', [StudentController::class, 'assign']);
});


