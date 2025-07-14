<?php


namespace App\Repository\Ambulances;
use App\Interfaces\Ambulances\AmbulanceRepositoryInterface;
use App\Models\Ambulance;


class AmbulanceRepository implements AmbulanceRepositoryInterface
{
    public function index()
    {
        $ambulances = Ambulance::all();
        return view('Dashboard.Ambulances.index',compact('ambulances'));
    }

    public function create()
    {
        return view('Dashboard.Ambulances.create');
    }

    public function store($request)
    {
        try {

        Ambulance::create([
            'car_number'=>$request->car_number,
            'car_model'=>$request->car_model,
            'car_year_made'=>$request->car_year_made,
            'driver_license_number'=>$request->driver_license_number,
            'driver_phone'=>$request->driver_phone,
            'car_type'=>$request->car_type,
            'notes'=>$request->notes,
            'is_available'=>1,
            'driver_name'=>$request->driver_name,
        ]);


      session()->flash('add');
      return redirect()->back();

        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $ambulance = Ambulance::findorfail($id);
        return view('Dashboard.Ambulances.edit',compact('ambulance'));
    }

    public function update($request)
    {
        if (!$request->has('is_available'))
            $request->request->add(['is_available' => 2]);
        else
            $request->request->add(['is_available' => 1]);

        $ambulance = Ambulance::findOrFail($request->id);

        $ambulance->update($request->all());

        // insert trans
        $ambulance->driver_name = $request->driver_name;
        $ambulance->notes = $request->notes;
        $ambulance->save();

        session()->flash('edit');
        return redirect()->route('admin.dashboard.ambulance.index');
    }

    public function destroy($request)
    {
        Ambulance ::destroy($request->id);
        session()->flash('delete');
        return redirect()->back();
    }
}
