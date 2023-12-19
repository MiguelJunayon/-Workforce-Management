<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SiteController;


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

Route::get('/', [SiteController::class, 'home']);

// List all employees
Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/employees/create', [EmployeeController::class, 'create']);
Route::post('/employees/create', [EmployeeController::class, 'store']);
Route::get('/employees/{employee}', [EmployeeController::class, 'edit']);
Route::post('/employees/{employee}', [EmployeeController::class, 'update']);
Route::delete('/employees/delete/{employee}', [EmployeeController::class, 'delete']);


// List all departments
Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/departments/create', [DepartmentController::class, 'create']);
Route::post('/departments/create', [DepartmentController::class, 'store']);
Route::get('/departments/{department}', [DepartmentController::class, 'edit']);
Route::post('/departments/{department}', [DepartmentController::class, 'update']);
Route::delete('/departments/delete/{department}', [DepartmentController::class, 'delete']);

// List all tasks
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/create', [TaskController::class, 'create']);
Route::post('/tasks/create', [TaskController::class, 'store']);
Route::get('/tasks/{task}', [TaskController::class, 'edit']);
Route::post('/tasks/{task}', [TaskController::class, 'update']);
Route::delete('/tasks/delete/{task}', [TaskController::class, 'delete']);
Route::resource('tasks', TaskController::class);
