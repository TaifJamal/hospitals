<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\Finance\ReceiptRepositoryInterface;

class ReceiptAccountController extends Controller
{
      private $Receipt;

    public function __construct(ReceiptRepositoryInterface $Receipt)
    {
        $this->Receipt = $Receipt;
    }


    public function index()
    {
        return $this->Receipt->index();
    }

    public function create()
    {
        return $this->Receipt->create();
    }

    public function show($id)
    {
        return $this->Receipt->show($id);
    }


    public function store(Request $request)
    {
       return $this->Receipt->store($request);
    }


    public function edit($id)
    {
        return $this->Receipt->edit($id);
    }


    public function update(Request $request)
    {
        return $this->Receipt->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->Receipt->destroy($request);
    }
}
