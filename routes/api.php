<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChesckController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\clientfamiliymember;
use App\Http\Controllers\DealController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\ForeachController;
use App\Http\Controllers\InterfaseController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OopController;
use App\Http\Controllers\OopProjectController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\QoshimchaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('foreach',ForeachController::class);
Route::resource('iter',InterfaseController::class);
Route::resource('oop',OopController::class);
Route::resource('oopproject',OopProjectController::class);
Route::resource('chesk', ChesckController::class);
Route::resource('expenses', ExpenseController::class);
Route::resource('clients', ClientsController::class);
Route::resource('clientf', clientfamiliymember::class);
Route::resource('deals', DealController::class);
Route::resource('tasks', TaskController::class);
Route::resource('notifications', NotificationController::class);
Route::resource('orders', OrderController::class);
Route::resource('qoshimcha', QoshimchaController::class);
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/search2', [SearchController::class, 'search2'])->name('search2');
Route::get('/search25', [SearchController::class, 'search25'])->name('search25');
Route::get('/search3', [SearchController::class, 'search3'])->name('search3');

