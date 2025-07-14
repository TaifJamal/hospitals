<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard_Laboratorie_Employee\InvoiceController;


Route::get('laboratorie_employee/dashboard', function () {
    return view('dashboard.dashboard_LaboratorieEmployee.dashboard');
})->middleware(['auth:laboratorie_employee', 'verified'])->name('laboratorie_employee.dashboard');

Route::prefix('laboratorie_employee/dashboard')->name('laboratorie_employee.dashboard.')->middleware(['auth:laboratorie_employee'])->group(function(){

    Route::resource('invoices_laboratorie_employee', InvoiceController::class);
    Route::get('completed_invoices', [InvoiceController::class,'completed_invoices'])->name('completed_invoices');
    Route::get('view_laboratories/{id}', [InvoiceController::class,'view_laboratories'])->name('view_laboratories');

});
