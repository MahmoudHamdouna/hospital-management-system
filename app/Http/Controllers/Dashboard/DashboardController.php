<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function adminlogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login');
    }

    public function doctorlogout()
    {
        Auth::guard('doctor')->logout();
        return redirect()->route('login');
    }

    public function raylogout()
    {
        Auth::guard('ray_employee')->logout();
        return redirect()->route('login');
    }

    public function laboratorielogout()
    {
        Auth::guard('laboratorie_employee')->logout();
        return redirect()->route('login');
    }

    public function index()
    {
        return view('Dashboard.livewire.index');
    }

    public function patientlogout()
    {
        Auth::guard('patient')->logout();
        return redirect()->route('login');
    }
}
