<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IslandController;
use App\Http\Controllers\VillageController;
use App\Http\Controllers\TrainingTypeController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\ReportController;
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

    //village
    Route::group(['as' => 'village.', 'prefix' => 'village'], function () {
        Route::get('', [VillageController::class, 'index'])->name('index');
        Route::get('create', [VillageController::class, 'create'])->name('create');
        Route::post('', [VillageController::class, 'store'])->name('store');
        Route::get('export', [VillageController::class, 'exportlist'])->name('export');
        Route::group(['prefix' => '{village}'], function () { 
        Route::get('', [VillageController::class, 'show'])->name('show');
        Route::get('edit', [VillageController::class, 'edit'])->name('edit');
        Route::match(['PUT', 'PATCH'], '', [VillageController::class, 'update'])->name('update');
        Route::delete('', [VillageController::class, 'delete'])->name('delete');
        });
    });

     //Training Types
     Route::group(['as' => 'training_type.', 'prefix' => 'training_type'], function () {
        Route::get('', [TrainingTypeController::class, 'index'])->name('index');
        Route::get('create', [TrainingTypeController::class, 'create'])->name('create');
        Route::post('', [TrainingTypeController::class, 'store'])->name('store');
        Route::get('export', [TrainingTypeController::class, 'exportlist'])->name('export');
        Route::group(['prefix' => '{trainingtype}'], function () { 
        Route::get('', [TrainingTypeController::class, 'show'])->name('show');
        Route::get('edit', [TrainingTypeController::class, 'edit'])->name('edit');
        Route::match(['PUT', 'PATCH'], '', [TrainingTypeController::class, 'update'])->name('update');
        Route::delete('', [TrainingTypeController::class, 'delete'])->name('delete');
        });
    });

    //Trainings
    Route::group(['as' => 'training.', 'prefix' => 'training'], function () {
        Route::get('', [TrainingController::class, 'index'])->name('index');
        Route::get('create', [TrainingController::class, 'create'])->name('create');
        Route::post('', [TrainingController::class, 'store'])->name('store');
        Route::get('export', [TrainingController::class, 'exportlist'])->name('export');
        Route::group(['prefix' => '{trainings}'], function () { 
        Route::get('', [TrainingController::class, 'show'])->name('show');
        Route::get('edit', [TrainingController::class, 'edit'])->name('edit');
        Route::match(['PUT', 'PATCH'], '', [TrainingController::class, 'update'])->name('update');
        Route::delete('', [TrainingController::class, 'delete'])->name('delete');

        //new input for routes:
        //Route::get('delete', [TrainingController::class, 'delete'])->name('trainings.delete');
        //Route::delete('', [TrainingController::class, 'destroy'])->name('trainings.destroy');
        });
    });

         //reports
         Route::group(['as' => 'report.', 'prefix' => 'report'], function () {
            Route::get('repo', [ReportController::class, 'index'])->name('index');
            Route::get('', [ReportController::class, '_repo'])->name('repo');
            Route::get('/training', [ReportController::class, 'generatePDF'])->name('pdf');
            Route::get('koolexcel', [ReportController::class, 'export'])->name('koolexcel');
            Route::get('excel', [ReportController::class, 'exportTrainingAttendance'])->name('excel');
            Route::get('create', [ReportController::class, 'create'])->name('create');
            Route::post('', [ReportController::class, 'store'])->name('store');
            Route::get('export', [ReportController::class, 'exportlist'])->name('export');
            Route::group(['prefix' => '{report}'], function () { 
            Route::get('', [ReportController::class, 'show'])->name('show');
            Route::get('edit', [ReportController::class, 'edit'])->name('edit');
            Route::match(['PUT', 'PATCH'], '', [ReportController::class, 'update'])->name('update');
            Route::delete('', [ReportController::class, 'delete'])->name('delete');
            });
        });

   

});