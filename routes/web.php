<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IslandController;
use App\Http\Controllers\VillageController;
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


Route::group(['middleware' => 'auth'], function ()
 {
    

    //employee
    Route::group(['as' => 'employee.', 'prefix' => 'employee'], function () {
        Route::get('', [EmployeeController::class, 'index'])->name('index');
        Route::get('create', [EmployeeController::class, 'create'])->name('create');
        Route::post('', [EmployeeController::class, 'store'])->name('store');
        Route::get('export', [EmployeeController::class, 'exportlist'])->name('export');
        Route::group(['prefix' => '{kiisland}'], function () { 
        Route::get('', [EmployeeController::class, 'show'])->name('show');
        Route::get('edit', [EmployeeController::class, 'edit'])->name('edit');
        Route::match(['PUT', 'PATCH'], '', [EmployeeController::class, 'update'])->name('update');
        Route::delete('', [EmployeeController::class, 'delete'])->name('delete');
        });
    });

     //island
     Route::group(['as' => 'island.', 'prefix' => 'island'], function () {
        Route::get('', [IslandController::class, 'index'])->name('index');
        Route::get('create', [IslandController::class, 'create'])->name('create');
        Route::post('', [IslandController::class, 'store'])->name('store');
        Route::get('export', [IslandController::class, 'exportlist'])->name('export');
        Route::group(['prefix' => '{kiisland?}'], function () { 
        Route::get('', [IslandController::class, 'show'])->name('show');
        Route::get('edit', [IslandController::class, 'edit'])->name('edit');
        Route::match(['PUT', 'PATCH'], '', [IslandController::class, 'update'])->name('update');
        Route::delete('', [IslandController::class, 'delete'])->name('delete');
        });
    });

<<<<<<< HEAD
    //village
=======
    //island
>>>>>>> 45c06c87a7a70cbbfeb4f1c650d8601d5b263d65
    Route::group(['as' => 'village.', 'prefix' => 'village'], function () {
        Route::get('', [VillageController::class, 'index'])->name('index');
        Route::get('create', [VillageController::class, 'create'])->name('create');
        Route::post('', [VillageController::class, 'store'])->name('store');
        Route::get('export', [VillageController::class, 'exportlist'])->name('export');
<<<<<<< HEAD
        Route::group(['prefix' => '{village}'], function () { 
=======
        Route::group(['prefix' => '{kivillage}'], function () { 
>>>>>>> 45c06c87a7a70cbbfeb4f1c650d8601d5b263d65
        Route::get('', [VillageController::class, 'show'])->name('show');
        Route::get('edit', [VillageController::class, 'edit'])->name('edit');
        Route::match(['PUT', 'PATCH'], '', [VillageController::class, 'update'])->name('update');
        Route::delete('', [VillageController::class, 'delete'])->name('delete');
        });
    });

<<<<<<< HEAD

=======
>>>>>>> 45c06c87a7a70cbbfeb4f1c650d8601d5b263d65
   

});