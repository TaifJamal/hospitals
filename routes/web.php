<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix(LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(function () {


require __DIR__.'/userDashboard.php';
require __DIR__.'/adminDashboard.php';
require __DIR__.'/doctorDashboard.php';
require __DIR__.'/ray_employeeDashboard.php';
require __DIR__.'/laboratorie_employeeDashboard.php';
require __DIR__.'/patientDashboard.php';
require __DIR__.'/auth.php';
});

Route::view('ar/dashboard/Add_GroupServices','livewire.GroupServices.include_create')->middleware('auth:admin')->name('admin.dashboard.Add_GroupServices.ar');
Route::view('en/dashboard/Add_GroupServices','livewire.GroupServices.include_create')->middleware('auth:admin')->name('admin.dashboard.Add_GroupServices.en');
Route::view('ar/dashboard/single_invoices','livewire.single_invoices.index')->middleware('auth:admin')->name('admin.dashboard.single_invoices.ar');
Route::view('en/dashboard/single_invoices','livewire.single_invoices.index')->middleware('auth:admin')->name('admin.dashboard.single_invoices.en');
Route::view('dashboard/Print_single_invoices','livewire.single_invoices.print')->middleware('auth:admin')->name('admin.dashboard.Print_single_invoices');
Route::view('ar/dashboard/group_invoices','livewire.group_invoices.index')->middleware('auth:admin')->name('admin.dashboard.group_invoices.ar');
Route::view('en/dashboard/group_invoices','livewire.group_invoices.index')->middleware('auth:admin')->name('admin.dashboard.group_invoices.en');
Route::view('dashboard/Print_group_invoices','livewire.Group_invoices.print')->middleware('auth:admin')->name('admin.dashboard.Print_group_invoices');
