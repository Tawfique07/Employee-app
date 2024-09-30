<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/employee', [EmployeeController::class , 'index'])->name('employee.index');

Route::get('employee/create',[EmployeeController::class, 'create'])->name('employee.create');

Route::post('employee/create',[EmployeeController::class, 'store'])->name('employee.store');
