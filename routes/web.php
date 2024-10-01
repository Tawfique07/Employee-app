<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/employee', [EmployeeController::class , 'index'])->name('employee.index');

Route::get('employee/create',[EmployeeController::class, 'create'])->name('employee.create');

Route::post('employee/create',[EmployeeController::class, 'store'])->name('employee.store');

Route::get('/employee/{id}/show', [EmployeeController::class, 'show'])->name('employee.show');

Route::get('/employee/{id}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');

Route::put('employee/{id}/update',[EmployeeController::class, 'update'])->name('employee.update');

Route::post('employee/search',[EmployeeController::class, 'search'])->name('employee.search');
