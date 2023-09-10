<?php

namespace App\Interfaces\doctor_dashboard;

interface InvoicesRepositoryInterface
{
    // Get Invoices Doctor
    public function index();
    public function reviewInvoices();
    public function completedInvoices();

    public function showLaboratorie($id);
    public function show($id);
}
