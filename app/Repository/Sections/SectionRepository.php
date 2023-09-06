<?php

namespace App\Repository\Sections;


use App\Models\Section;
use Illuminate\Http\Request;
use App\Interface\Sections\SectionRepositoryInterface;

class SectionRepository implements SectionRepositoryInterface
{

    public function index()
    {

        $sections = Section::all();
        return view('dashboard.Section.index', compact('sections'));
    }

    public function store(Request $request)
    {
        $section = $request->validate([
            'name' => 'required|max:50|min:3',
        ]);
        Section::create($section);
        session()->flash('add');
        return redirect()->route('sections.index');
    }

    public function update($request)
    {
        $section = Section::findOrFail($request->id);
        $section->update([
            'name' => $request->input('name'),
        ]);
        session()->flash('edit');
        return redirect()->route('sections.index');
    }


    public function destroy($request)
    {
        $section = Section::findOrFail($request->id);
        $section->delete();
        session()->flash('delete');
        return redirect()->route('sections.index');
    }
}
