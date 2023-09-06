<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interface\Sections\SectionRepositoryInterface;

class SectionController extends Controller
{

    private $sections;

    public function __construct(SectionRepositoryInterface $sections)
    {
        $this->sections = $sections;
        // $this->middleware('auth:admin');

    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->sections->index();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->sections->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->sections->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        return $this->sections->destroy($request);
    }
}
