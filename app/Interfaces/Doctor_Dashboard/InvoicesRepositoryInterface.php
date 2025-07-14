<?php

namespace App\Interfaces\Doctor_Dashboard;

interface InvoicesRepositoryInterface
{
    // Get Invoices Doctor
    public function index();

    public function reviewInvoices();

    public function completedInvoices();

    public function show($id);

}
