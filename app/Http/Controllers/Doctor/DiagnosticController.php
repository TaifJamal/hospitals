<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\Doctor_Dashboard\DiagnosisRepositoryInterface;

class DiagnosticController extends Controller
{
    private $Diagnosis;

    public function __construct(DiagnosisRepositoryInterface $Diagnosis)
    {
        $this->Diagnosis = $Diagnosis;
    }


    public function store(Request $request)
    {
        return $this->Diagnosis->store($request);
    }


    public function show($id)
    {
        return $this->Diagnosis->show($id);
    }


    public function addReview(Request $request)
    {
        return $this->Diagnosis->addReview($request);
    }


}
