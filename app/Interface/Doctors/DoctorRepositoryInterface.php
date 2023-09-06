<?php
namespace App\Interface\Doctors;

use Illuminate\Http\Request;

interface DoctorRepositoryInterface
{
    // get All Doctors
    public function index();

    // store Doctors
    public function create();

//     // store Doctors
//     public function store(Request $request);

//     // Update Doctors
//     public function update($request);

//     // destroy Doctors
//     public function destroy($request);
}
