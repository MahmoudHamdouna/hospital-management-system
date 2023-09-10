<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class GetPatientController extends Controller
{
    public function getPatient(request $request)
    {
        $search = $request->search;
        if ($search == '') {
            $patients = Patient::limit(5)->get();
        } else {
            $patients = Patient::Search($search)->limit(5)->get();
        }
        $patients = $patients->sortBy('name');
        return response($patients);
    }
}
