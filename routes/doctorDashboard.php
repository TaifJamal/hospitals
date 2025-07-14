<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\RayController;
use App\Http\Controllers\Doctor\InvoiceController;
use App\Http\Controllers\Doctor\DiagnosticController;
use App\Http\Controllers\Doctor\LaboratorieController;
use App\Http\Controllers\Doctor\PatientDetailsController;


Route::get('404', function () {
    return view('Dashboard.404');
})->middleware(['auth:doctor', 'verified'])->name('404');

Route::get('doctor/dashboard', function () {
    return view('dashboard.doctor.dashboard');
})->middleware(['auth:doctor', 'verified'])->name('doctor.dashboard');


Route::prefix('doctor/dashboard')->name('doctor.dashboard.')->middleware(['auth:doctor'])->group(function(){

    Route::get('completed_invoices', [InvoiceController::class,'completedInvoices'])->name('completedInvoices');
    Route::get('review_invoices', [InvoiceController::class,'reviewInvoices'])->name('reviewInvoices');
    Route::resource('invoices', InvoiceController::class);

    Route::post('add_review', [DiagnosticController::class,'addReview'])->name('add_review');
    Route::resource('diagnostics', DiagnosticController::class);

    Route::resource('rays', RayController::class);
    Route::resource('laboratories', LaboratorieController::class);

    Route::get('patient_details/{id}', [PatientDetailsController::class,'index'])->name('patient_details');
});



