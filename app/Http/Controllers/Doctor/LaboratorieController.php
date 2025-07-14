<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\Doctor_Dashboard\LaboratoriesRepositoryInterface;

class LaboratorieController extends Controller
{
    private $laboratorie;

    public function __construct(LaboratoriesRepositoryInterface $laboratorie)
    {
        $this->laboratorie = $laboratorie;
    }

    public function store(Request $request)
    {
        return $this->laboratorie->store($request);
    }


    public function update(Request $request, $id)
    {
        return $this->laboratorie->update($request,$id);
    }


    public function destroy($id)
    {
        return $this->laboratorie->destroy($id);
    }

    public function show($id)
    {
        return $this->laboratorie->show($id);
    }
}
