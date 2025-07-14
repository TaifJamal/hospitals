<?php

namespace App\Interfaces\Doctor_Dashboard;

interface RaysRepositoryInterface
{
    public function store($request);

    public function update($request,$id);

    public function destroy($id);
}
