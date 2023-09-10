<?php

namespace App\Interfaces\Doctors;

interface DoctorRepositoryInterface
{
    // Get All Doctor
    public function index();

    // Create All Doctor
    public function create();

    //Store Doctor
    public function store($request);
    // Update Doctor
    public function update($request);

    // destroy v
    public function destroy($request);

    public function edit($id);


    public function update_password($request);

    public function update_status($request);
}
