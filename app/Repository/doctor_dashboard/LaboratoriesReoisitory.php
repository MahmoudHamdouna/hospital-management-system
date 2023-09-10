<?php

namespace App\Repository\doctor_dashboard;

use App\Interfaces\doctor_dashboard\LaboratoriesRepositoryInterface;
use App\Models\Laboratorie;
use App\Models\Ray;

class LaboratoriesReoisitory implements LaboratoriesRepositoryInterface
{

    public function store($request)
    {
        try {
            Laboratorie::create([
                'description' => $request->description,
                'invoice_id' => $request->invoice_id,
                'patient_id' => $request->patient_id,
                'doctor_id' => $request->doctor_id,
            ]);
            session()->flash('add');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request, $id)
    {
        try {
            $Ray = Laboratorie::findOrFail($id);
            $Ray->update([
                'description' => $request->description,
            ]);
            session()->flash('edit');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            Laboratorie::destroy($id);
            session()->flash('delete');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
