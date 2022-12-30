<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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
        Route::group(['prefix' => '{kiisland?}'], function () { 
        Route::get('', [EmployeeController::class, 'show'])->name('show');
        Route::get('edit', [EmployeeController::class, 'edit'])->name('edit');
        Route::match(['PUT', 'PATCH'], '', [EmployeeController::class, 'update'])->name('update');
        Route::delete('', [EmployeeController::class, 'delete'])->name('delete');
        });
    });

   

});