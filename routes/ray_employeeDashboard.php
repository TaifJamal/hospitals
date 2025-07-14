<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard_Ray_Employee\InvoiceController;



Route::get('ray_employee/dashboard', function () {
    return view('dashboard.dashboard_RayEmployee.dashboard');
})->middleware(['auth:ray_employee', 'verified'])->name('ray_employee.dashboard');


Route::prefix('ray_employee/dashboard')->name('ray_employee.dashboard.')->middleware(['auth:ray_employee'])->group(function(){

    Route::resource('invoices', InvoiceController::class);
    Route::get('completed_invoices', [InvoiceController::class,'completed_invoices'])->name('completed_invoices');
    Route::get('view_rays/{id}', [InvoiceController::class,'viewRays'])->name('view_rays');

});





