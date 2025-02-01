<?php

use Illuminate\Support\Facades\Route;

use \App\Models\Employee;
use \App\Http\Controllers\EmployeeController;

Route::get('get-employee-data', [EmployeeController::class, 'index']);
Route::post('store-form', [EmployeeController::class, 'store']);

Route::get('update-employee-data/{id}', [EmployeeController::class, 'edit'])->whereNumber('id');
Route::post('/employee/{id}', [EmployeeController::class, 'update'])->whereNumber('id');