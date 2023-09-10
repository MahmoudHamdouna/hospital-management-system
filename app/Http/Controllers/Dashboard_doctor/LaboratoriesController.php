<?php

namespace App\Http\Controllers\Dashboard_doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\doctor_dashboard\LaboratoriesRepositoryInterface;
use Illuminate\Http\Request;

class LaboratoriesController extends Controller
{
    private $Laboratorie;

    public function __construct(LaboratoriesRepositoryInterface $Laboratorie)
    {
        $this->Laboratorie = $Laboratorie;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->Laboratorie->store($request);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->Laboratorie->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->Laboratorie->destroy($id);
    }
}
