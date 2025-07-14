<?php
namespace App\Repository\Sections;

use App\Interfaces\Sections\SectionRepositoryInterface;
use App\Models\Section;

class SectionRepository implements SectionRepositoryInterface
{

    public function index()
    {
        $sections = Section::all();
        return view('Dashboard.Sections.index',compact('sections'));
    }

    public function store($request){

        Section::create([
            'name'=>$request->name,
        ]);

        session()->flash('add');
        return redirect()->route('admin.dashboard.sections.index');
    }

     public function update($request){

        $section = Section::findOrFail($request->id);

       $section->update([
            'name'=>$request->name,
        ]);

        session()->flash('edit');
        return redirect()->route('admin.dashboard.sections.index');
    }

     public function destroy($request){

        $section = Section::findOrFail($request->id);

        $section->delete();

        session()->flash('delete');
        return redirect()->route('admin.dashboard.sections.index');
    }

     public function show($id)
    {
        $doctors =Section::findOrFail($id)->doctors;
        $section = Section::findOrFail($id);
        return view('Dashboard.Sections.show_doctors',compact('doctors','section'));
    }

}

