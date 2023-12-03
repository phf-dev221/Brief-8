<?php

use App\Http\Controllers\AssociationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ReservationController;
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

// // Route::get('/', function () {
// //     return view('welcome');
// });

Route::middleware('access:association')->group(function(){
    Route::get('/show_events/{id}',[EventController::class,'show'])->name('show');
    Route::get('/edit_events/{id}',[EventController::class,'edit']);
    Route::post('/update_events/{id}',[EventController::class,'update']);
    Route::get('/delete_events/{id}',[EventController::class,'destroy']);
    Route::get('/create-events',[EventController::class,'create']);
    Route::post('/store_events',[EventController::class,'store']);
    Route::get('/dashboard',[EventController::class,'index']);
    Route::get('/decliner/{id}',[EventController::class,'decliner']);
});

/*routes users*/
Route::get('/logout',[AuthController::class,'logout']);
Route::middleware('access:web')->group(function(){
    Route::post('/store-user',[UserController::class,'store']);
    Route::get('/',[EventController::class,'index_user']);
    Route::get('/create_reservation/{id}',[ReservationController::class,'create']);
    Route::post('/store_reservation/{id}',[ReservationController::class,'store']);
}
);

Route::get('/register-assoc',[AssociationController::class,'create']);
Route::post('/store-assoc',[AssociationController::class,'store']);
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/authenticate', [AuthController::class,'authenticate']);
Route::get('/',[EventController::class,'index_user']);
Route::get('/register',[UserController::class,'create']);
