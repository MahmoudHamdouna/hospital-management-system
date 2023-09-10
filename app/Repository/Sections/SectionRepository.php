<?php

namespace App\Repository\Sections;

use App\Events\MyEvent;
use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Models\section;
use App\Models\section_translations;

class SectionRepository implements SectionRepositoryInterface
{
    public function index()
    {
        $sections = section::all();
        // event(new MyEvent('Welcome', auth()->user()->name));
        return view('Dashboard.Section.index', compact('sections'));
    }

    public function store($request)
    {
        section::create([
            'name' => $request->name,
        ]);
        session()->flash('add');

        return redirect()->route('Sections.index');
    }

    public function update($request)
    {
        $section = Section::findOrFail($request->id);
        $section->update([
            'name' => $request->input('name'),
        ]);
        session()->flash('edit');
        return redirect()->route('Sections.index');
    }


    public function destroy($request)
    {
        Section::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('Sections.index');
    }


    public function show($id)
    {
        $doctors = Section::findOrFail($id)->doctors;
        $section = Section::findOrFail($id);
        return view('Dashboard.Section.show_doctors', compact('doctors', 'section'));
    }
}
