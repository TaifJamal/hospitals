<?php

namespace App\Interfaces\Doctor_Dashboard;

interface LaboratoriesRepositoryInterface
{
    public function store($request);

    public function update($request,$id);

    public function destroy($id);

    public function show($id);
}
