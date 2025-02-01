<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\FormProcessor;

Route::get('/userform', [FormProcessor::class, 'index'])->name('userform');
Route::post('/store_form', [FormProcessor::class, 'store'])->name('store_form');
Route::get('/greet', [FormProcessor::class, 'greet'])->name('greet');
