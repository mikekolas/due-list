<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;
use App\Http\Controllers\TaskController;

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
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('/lists', ToDoListController::class);
    Route::resource('/tasks', TaskController::class);
    Route::get('/tasks/{id}/status', 'App\Http\Controllers\TaskController@updateStatus')
        ->name('tasks.updateStatus')
        ->where('id', '[0-9]+');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();


