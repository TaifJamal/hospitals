<?php

namespace App\Repository\Doctor_Dashboard;
use App\Models\Laboratorie;
use Illuminate\Support\Facades\Auth;
use App\Interfaces\doctor_dashboard\LaboratoriesRepositoryInterface;

class LaboratoriesRepository implements LaboratoriesRepositoryInterface
{

    public function store($request)
    {
        try {

            Laboratorie::create([
                'description'=>$request->description,
                'invoice_id'=>$request->invoice_id,
                'patient_id'=>$request->patient_id,
                'doctor_id'=>$request->doctor_id,
            ]);
            session()->flash('add');
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request, $id)
    {
        try {
            $Laboratorie = Laboratorie::findOrFail($id);
            $Laboratorie->update([
                'description' => $request->description,
            ]);
            session()->flash('edit');
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            Laboratorie ::destroy($id);
            session()->flash('delete');
            return redirect()->back();
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

     public function show($id)
     {
        $laboratories = Laboratorie::findorFail($id);
        if($laboratories->doctor_id != Auth::user()->id){
            //abort(404);
            return redirect()->route('404');

        }

        return view('Dashboard.Doctor.invoices.view_laboratories', compact('laboratories'));
    }
}
