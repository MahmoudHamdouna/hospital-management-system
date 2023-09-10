<?php

use App\Http\Controllers\Dashboard_doctor\DiagnosticController;
use App\Http\Controllers\Dashboard_doctor\LaboratoriesController;
use App\Http\Controllers\Dashboard_doctor\PatientDetailsController;
use App\Http\Controllers\Dashboard_doctor\RayController;
use App\Http\Controllers\Dashboard_Ray_Employee\InvoiceController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| RayEmployee Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/dashboard/ray_employee', function () {
            return view('Dashboard.dashboard_RayEmployee.dashboard');
        })->middleware(['auth:ray_employee'])->name('dashboard.ray_employee');
        ////////////////////////////////////////////////////////////////////////////////
        Route::middleware(['auth:ray_employee'])->group(function () {
            Route::resource('invoice', InvoiceController::class);
            Route::get('completed_invoices', [InvoiceController::class, 'completed_invoices'])->name('completed_invoices');
            Route::get('view_rays/{id}', [InvoiceController::class, 'viewRays'])->name('view_rays');
        });


        require __DIR__ . '/auth.php';
    }
);
