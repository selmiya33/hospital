<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interface\Doctors\DoctorRepositoryInterface;

class DoctorController extends Controller
{

    private $doctors;

    public function __construct(DoctorRepositoryInterface $doctors)
    {
        $this->doctors = $doctors;
        // $this->middleware('auth:admin');

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->doctors->index();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return $this->doctors->create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->doctors->store($request);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
