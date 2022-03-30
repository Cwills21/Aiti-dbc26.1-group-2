<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\RentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Auth\RegisteredUserController;
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
Route::get('/dashbd', [CarController::class, 'dashbd'])->name('dashbd');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

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
Route::prefix('/admin')->group(function(){
    // Route::get('/', [CarController::class, 'showAllCars'])->name('showAllCars');
    Route::get('/add', [RegisteredUserController::class, 'showAddAdmin'])->name('showAddAdmin');
    Route::put('/', [RegisteredUserController::class, 'addAdmin']);    
    });

//Rent  
Route::prefix('/rent')->group(function(){
    Route::get('/{id}/rent', [RentController::class, 'showRentCarPage'])->name('rentCar');
    Route::post('/', [RentController::class, 'saveRent'])->name('saveRent');
    Route::get('/pending', [RentController::class, 'showPendingRent'])->name('PendingRent')->middleware(['auth']);
    Route::put('/{id}/approve', [RentController::class, 'approveRent'])->name('approveRent')->middleware(['auth']);
    Route::put('/decline', [RentController::class, 'declineRent'])->name('declineRent')->middleware(['auth']);
    });

//Customers
Route::get('/customers', [CustomerController::class, 'showAllCustomers'])->middleware(['auth']);
Route::get('/customers/add', [CustomerController::class, 'showAddCustomerPage'])->name('AddProfile');
// Route::get('/courses/{id}', [CourseController::class, 'showOneCourse'])->name('viewCourse');

Route::get('/customers/{id}/edit', [CustomerController::class, 'showEditCustomerPage'])->name('updateCustomer');
Route::post('/customers', [CustomerController::class, 'saveCustomer'])->name('saveCustomer');
Route::put('/customers', [CustomerController::class, 'updateCustomer']);
Route::delete('/customers', [CustomerController::class, 'deleteCustomer'])->name('deleteCustomer');

