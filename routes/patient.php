<?php

use App\Http\Controllers\Dashboard_Patient\PatientController;
use App\Http\Livewire\Chat\CreateChat;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| patient Routes
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
        Route::get('/dashboard/patient', function () {
            return view('Dashboard.laboratorie_employee.dashboard');
        })->middleware(['auth:patient'])->name('dashboard.patient');
        Route::middleware(['auth:patient'])->group(function () {
            Route::get('invoices', [PatientController::class, 'invoices'])->name('invoices.patient');
            Route::get('laboratories', [PatientController::class, 'laboratories'])->name('laboratories.patient');
            Route::get('view_laboratories/{id}', [PatientController::class, 'viewLaboratories'])->name('laboratories.view');
            Route::get('rays', [PatientController::class, 'rays'])->name('rays.patient');
            Route::get('view_rays/{id}', [PatientController::class, 'viewRays'])->name('rays.view');
            Route::get('payments', [PatientController::class, 'payments'])->name('payments.patient');

            Route::get('list/doctors', CreateChat::class)->name('list.doctor');
        });

        require __DIR__ . '/auth.php';
    }
);
