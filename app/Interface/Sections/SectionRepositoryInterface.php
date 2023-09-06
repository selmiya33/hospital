<?php
namespace App\Interface\Sections;

use Illuminate\Http\Request;

interface SectionRepositoryInterface
{
    // get All Sections
    public function index();

    // store Sections
    public function store(Request $request);

    // // Update Sections
    public function update($request);

    // // destroy Sections
    public function destroy($request);
}
