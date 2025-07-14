<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard_Patient\PatientController;



Route::get('patient/dashboard', function () {
    return view('dashboard.dashboard_patient.dashboard');
})->middleware(['auth:patient', 'verified'])->name('patient.dashboard');

Route::prefix('patient/dashboard')->name('patient.dashboard.')->middleware(['auth:patient'])->group(function(){

    Route::get('invoices', [PatientController::class,'invoices'])->name('invoices.patient');
    Route::get('laboratories', [PatientController::class,'laboratories'])->name('laboratories.patient');
    Route::get('view_laboratories/{id}', [PatientController::class,'viewLaboratories'])->name('laboratories.view');
    Route::get('rays', [PatientController::class,'rays'])->name('rays.patient');
    Route::get('view_rays/{id}', [PatientController::class,'viewRays'])->name('rays.view');
    Route::get('payments', [PatientController::class,'payments'])->name('payments.patient');

});
