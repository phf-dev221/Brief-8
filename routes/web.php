<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Models\Event;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[UserController::class,'create']);
Route::post('/store-user',[UserController::class,'store']);


Route::get('/register-assoc',[AssociationController::class,'create']);
Route::post('/store-assoc',[AssociationController::class,'store']);


Route::get('/login',[AuthController::class,'login']);
Route::post('/authenticate', [AuthController::class,'authenticate']);


/*evenements*/
Route::get('/create-events',[EventController::class,'create'])->middleware('auth:association');
Route::post('/store_events',[EventController::class,'store'])->middleware('auth:association');
Route::get('/dashboard',[EventController::class,'index'])->middleware('auth:association');
Route::get('/show_events/{id}',[EventController::class,'show'])->middleware('auth:association')->name('show');
Route::get('/edit_events/{id}',[EventController::class,'edit']);
Route::post('/update_events/{id}',[EventController::class,'update']);
Route::get('/delete_events/{id}',[EventController::class,'destroy']);