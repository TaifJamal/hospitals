<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\AmbulanceController;
use App\Http\Controllers\Dashboard\InsuranceController;
use App\Http\Controllers\Dashboard\RayEmployeeController;
use App\Http\Controllers\Dashboard\SingleServiceController;
use App\Http\Controllers\Dashboard\PaymentAccountController;
use App\Http\Controllers\Dashboard\ReceiptAccountController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Dashboard\LaboratorieEmployeeController;


Route::get('admin/dashboard', function () {
    return view('dashboard.admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');



Route::prefix('admin/dashboard')->name('admin.dashboard.')->middleware(['auth:admin'])->group(function(){

    Route::resource('sections', SectionController::class);
    Route::resource('doctors', DoctorController::class);
    Route::post('update_password', [DoctorController::class, 'update_password'])->name('update_password');
    Route::post('update_status', [DoctorController::class, 'update_status'])->name('update_status');
    Route::resource('service', SingleServiceController::class);
    Route::resource('insurance', InsuranceController::class);
    Route::resource('ambulance', AmbulanceController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('receipt', ReceiptAccountController::class);
    Route::resource('payment', PaymentAccountController::class);
    Route::resource('ray_employee', RayEmployeeController::class);
    Route::resource('laboratorie_employee', LaboratorieEmployeeController::class);


});



