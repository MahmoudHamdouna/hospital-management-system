<?php

namespace App\Http\Controllers\Dashboard_doctor;

use App\Http\Controllers\Controller;
use App\Interfaces\doctor_dashboard\RaysRepositoryInterface;
use Illuminate\Http\Request;

class RayController extends Controller
{

    private $ray;

    public function __construct(RaysRepositoryInterface $ray)
    {
        $this->ray = $ray;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->ray->store($request);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->ray->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->ray->destroy($id);
    }
}
