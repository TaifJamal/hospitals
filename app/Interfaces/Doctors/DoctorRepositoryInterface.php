<?php

namespace App\Interfaces\Doctors;

interface DoctorRepositoryInterface
{
    public function index();

    public function create();

    public function store($request);

    public function update($request);

    public function destroy($request);

    public function edit($id);

    // update_password
    public function update_password($request);

    // update_status
    public function update_status($request);

}
