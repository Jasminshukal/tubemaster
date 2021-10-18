<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('logout', [App\Http\Controllers\HomeController::class, 'logout']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('clients', ClientController::class);

Route::resource('projects', ProjectController::class);
Route::post('projects/save/comments', [ProjectController::class,'save_comment'])->name('projects.save.comments');

Route::resource('equipments', EquipmentController::class);

Route::resource('Warehouse', WarehouseController::class);
