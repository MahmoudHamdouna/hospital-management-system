<?php

namespace App\Http\Controllers\Dashboard_Ray_Employee;

use App\Http\Controllers\Controller;
use App\Interfaces\Dashboard_Ray_Employee\InvoicesRepositoryInterface;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    private $Ray_Employee;

    public function __construct(InvoicesRepositoryInterface $Ray_Employee)
    {
        $this->Ray_Employee = $Ray_Employee;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->Ray_Employee->index();
    }

    public function completed_invoices()
    {
        return $this->Ray_Employee->completed_invoices();
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return $this->Ray_Employee->edit($id);
    }

    public function viewRays(string $id)
    {
        return $this->Ray_Employee->view_rays($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->Ray_Employee->update($request, $id);
    }
}
