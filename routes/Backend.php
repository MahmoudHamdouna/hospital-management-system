<?php

use App\Events\MyEvent;
use App\Http\Controllers\Dashboard\AmbulanceController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\InsuranceController;
use App\Http\Controllers\Dashboard\LaboratorieEmployeeController;
use App\Http\Controllers\Dashboard\PatientController;
use App\Http\Controllers\Dashboard\PaymentAccountController;
use App\Http\Controllers\Dashboard\RayEmployeeController;
use App\Http\Controllers\Dashboard\ReceiptAccountController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\Dashboard\SingleServiceController;
use App\Http\Controllers\GetPatientController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/index', [DashboardController::class, 'index']);
Route::get('/user/logout', [DashboardController::class, 'logout'])->name('user.logout');
Route::get('/admin/logout', [DashboardController::class, 'adminlogout'])->name('admin.logout');
Route::get('/doctor/logout', [DashboardController::class, 'doctorlogout'])->name('doctor.logout');
Route::get('/ray_employee/logout', [DashboardController::class, 'raylogout'])->name('ray_employee.logout');
Route::get('/laboratorie_employee/logout', [DashboardController::class, 'laboratorielogout'])->name('laboratorie_employee.logout');
Route::get('/patient/logout', [DashboardController::class, 'patientlogout'])->name('patient.logout');

Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        Route::middleware('auth:admin')->group(function () {
            Route::resource('Sections', SectionController::class);
            Route::resource('Doctors', DoctorController::class);
            Route::post('update_password', [DoctorController::class, 'update_password'])->name('update_password');
            Route::post('update_status', [DoctorController::class, 'update_status'])->name('update_status');
            Route::resource('Service', SingleServiceController::class);

            Route::view('Add_GroupServices', 'livewire.GroupServices.include_create')->name('Add_GroupServices');

            Route::resource('insurance', InsuranceController::class);
            Route::resource('Ambulance', AmbulanceController::class);
            Route::resource('Patients', PatientController::class);
            Route::resource('Receipt', ReceiptAccountController::class);
            Route::resource('Payment', PaymentAccountController::class);
            // Route::get('Payment', [PaymentAccountController::class, 'getPatient']);

            Route::post('/getPatients', [GetPatientController::class, 'getPatient'])->name('getPatients');

            Route::resource('ray_employee', RayEmployeeController::class);
            Route::resource('laboratorie_employee', LaboratorieEmployeeController::class);

            Route::view('single_invoices', 'livewire.single_invoices.index')->name('single_invoices');
            Route::view('group_invoices', 'livewire.Group_invoices.index')->name('group_invoices');

            Route::view('Print_single_invoices', 'livewire.single_invoices.print')->name('Print_single_invoices');
            Route::view('Print_group_invoices', 'livewire.Group_invoices.print')->name('Print_group_invoices');
        });
        // Dashboard USER
        Route::get('/dashboard/user', function () {
            return view('Dashboard.User.dashboard');
        })->middleware(['auth', 'verified'])->name('dashboard.user');
        Route::middleware('auth')->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        });
        // Dashboard ADMIN
        Route::get('/dashboard/admin', function () {
            // event(new MyEvent(' Welcome', auth()->user()->name));
            $data['ser'] = \App\Models\Service::count();
            $data['grp'] = \App\Models\group::count();
            return view('Dashboard.Admin.dashboard', $data);
        })->middleware(['auth:admin', 'verified'])->name('dashboard.admin');
        // Dashboard DOCTOR
        Route::get('/dashboard/doctor', function () {
            return view('Dashboard.Doctor.dashboard');
        })->middleware(['auth:doctor', 'verified'])->name('dashboard.doctor');

        require __DIR__ . '/auth.php';
    }
);
