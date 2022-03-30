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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//Cars
Route::prefix('/cars')->group(function(){
    Route::get('/', [CarController::class, 'showAllCars'])->name('showAllCars');
    Route::get('/add', [CarController::class, 'showAddStudentPage'])->name('showAddStudentPage');
    Route::get('/{id}/edit', [CarController::class, 'showEditStudentPage'])->name('showEditStudentPage');
    Route::get('/{id}', [CarController::class, 'showAllStudents'])->name('showStudentDetails');
   
    Route::post('/', [CarController::class, 'saveStudent'])->name('saveStudent');
    Route::put('/', [CarController::class, 'updateStudent'])->name('updateStudent');
    Route::delete('/', [CarController::class, 'deleteStudent'])->name('deleteStudent');
    
    });