<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\MedicationController;

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

Route::get('/', [MedicationController::class,'index'])->name('home');
Route::get('/board', [BoardController::class,'index'])->name('main_board');

Route::get('/signup', [AuthController::class,'signuplayout'])->name('signuplayout');
Route::post('/signup/signup_btn', [AuthController::class,'signup'])->name('signup_btn');

Route::get('/login', [AuthController::class,'loginlayout'])->name('loginlayout');
Route::post('/login/login_btn', [AuthController::class,'login'])->name('login_btn');
/*

Route::prefix('auth')->group(function (){
    Route::post('signup', [AuthController::class,'signup']);
    Route::post('login', [AuthController::class,'login']);

});

Route::middleware(['auth:web'])->group(function(){

    Route::prefix('products')->group(function (){
        Route::post('/', [ProductController::class,'store']);
        Route::get ('/{product}', [ProductController::class,'show']);
        Route::post('/{product}', [ProductController::class,'update']);      
        Route::delete('/{product}', [ProductController::class,'destroy']);
        Route::post('like/{id}', [ProductController::class,'like']);
        Route::post('comment/{id}', [ProductController::class,'comment']);
    });
    Route::get ('products', [ProductController::class,'index']);
    Route::post ('search', [ProductController::class,'search']);
    Route::get('auth/logout', [AuthController::class,'logout']);
});

*/