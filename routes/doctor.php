<?php

use App\Http\Controllers\Dashboard_doctor\DiagnosticController;
use App\Http\Controllers\Dashboard_doctor\LaboratoriesController;
use App\Http\Controllers\Dashboard_doctor\PatientDetailsController;
use App\Http\Controllers\Dashboard_doctor\RayController;
use App\Http\Controllers\Doctor\InvoiceController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| Doctor Routes
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

        Route::get('/dashboard/doctor', function () {
            return view('Dashboard.doctor.dashboard');
        })->middleware(['auth:doctor'])->name('dashboard.admin');
        ////////////////////////////////////////////////////////////////////////////////
        Route::middleware(['auth:doctor'])->group(function () {
            Route::prefix('doctor')->group(function () {
                Route::get('completed_invoices', [InvoiceController::class, 'completedInvoices'])->name('completedInvoices');
                Route::get('review_invoices', [InvoiceController::class, 'reviewInvoices'])->name('reviewInvoices');
                Route::resource('invoices', InvoiceController::class);
                Route::resource('Diagnostics', DiagnosticController::class);
                Route::post('add_review', [DiagnosticController::class, 'addReview'])->name('add_review');
                Route::resource('ray', RayController::class);
                Route::get('patient_details/{id}', [PatientDetailsController::class, 'index'])->name('patient_details');
                Route::resource('Laboratories', LaboratoriesController::class);
                Route::get('show_laboratorie/{id}', [InvoiceController::class, 'showLaboratorie'])->name('show_laboratorie');
            });
        });
        require __DIR__ . '/auth.php';
    }
);
Route::get('/404', function () {
    return view('Dashboard.livewire.error404');
})->name('404');
