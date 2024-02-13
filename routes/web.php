<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


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

Route::get('/welcome', function () {
return view('welcome');
}); // welcome route

Route::get('/', [TaskController::class, 'index'])->name('tasks.index'); // index route
Route::post('/task', [TaskController::class, 'store'])->name('tasks.store'); // add task route
Route::delete('/task/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy'); // delete task

