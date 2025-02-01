<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\FormProcessor;
use \App\Models\Employee;

Route::get('/userform', [FormProcessor::class, 'index'])->name('userform');
Route::post('/store_form', [FormProcessor::class, 'store'])->name('store_form');
Route::get('/greet', [FormProcessor::class, 'greet'])->name('greet');

Route::get('/test_database', function () {
    $employee1 = new Employee;
    $employee1->name = "John Johnson";
    $employee1->age = 25;
    $employee1->salary = 100000;
    $employee1->role = "Programmer";
    $employee1->save();
});
