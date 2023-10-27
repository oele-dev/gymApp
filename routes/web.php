<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HoursController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SubscriptionsController;
use App\Http\Controllers\UsersController;
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

Route::get('/', HomeController::class);


Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/create', [UsersController::class, 'create']);
Route::post('/users', [UsersController::class, 'store']);

Route::get('/users/edit/{user}', [UsersController::class, 'edit']);
Route::put('/users/{user}', [UsersController::class, 'update']);

Route::delete('/users/{user}', [UsersController::class, 'destroy']);

Route::name('services.')
    ->prefix('services')
    ->group(function (){
        
    Route::get('/', [ServicesController::class, 'index'])->name('index');
});

Route::name('hours.')
    ->prefix('hours')
    ->group(function (){
        
    Route::get('/', [HoursController::class, 'index'])->name('index');
});


Route::name('subscriptions.')
    ->prefix('subscriptions')
    ->group(function (){
        
    Route::get('/', [SubscriptionsController::class, 'index'])->name('index');
});