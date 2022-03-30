<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [CarController::class, 'welcome'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Cars
Route::prefix('/cars')->group(function(){
    Route::get('/', [CarController::class, 'showAllCars'])->name('showAllCars');
    Route::get('/add', [CarController::class, 'showAddCarPage'])->name('showAddCarPage');
    Route::get('/{id}/edit', [CarController::class, 'showEditCarPage'])->name('updateCar');
   
    Route::post('/', [CarController::class, 'saveCar'])->name('saveCar');
    Route::put('/', [CarController::class, 'updateCar']);
    Route::delete('/', [CarController::class, 'deleteCar'])->name('deleteCar');
    
    });
//Users
Route::prefix('/users')->group(function(){
    // Route::get('/', [CarController::class, 'showAllCars'])->name('showAllCars');
    Route::get('/add_admin', [CarController::class, 'showAddAdminPage'])->name('showAddAdminPage');
    // Route::get('/{id}/edit', [CarController::class, 'showEditCarPage'])->name('updateCar');
   
    // Route::post('/', [CarController::class, 'saveCar'])->name('saveCar');
    // Route::put('/', [CarController::class, 'updateCar']);
    // Route::delete('/', [CarController::class, 'deleteCar'])->name('deleteCar');
    
    });