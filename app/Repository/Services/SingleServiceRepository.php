<?php


namespace App\Repository\Services;
use App\Models\Service;

class SingleServiceRepository implements \App\Interfaces\Services\SingleServiceRepositoryInterface
{

    public function index()
    {
        $services = Service::all();
        return view('Dashboard.Services.Single Service.index',compact('services'));
    }

    public function store($request)
    {
        try {

            Service::create([
                'price'=>$request->price,
                'description'=>$request->description,
                'name'=>$request->name,
                'status'=>1,
            ]);

            session()->flash('add');
            return redirect()->route('admin.dashboard.service.index');

        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function update($request)
    {
        try {


            $service = Service::findorfail($request->id);

             $service->update([
                'price'=>$request->price,
                'description'=>$request->description,
                'name'=>$request->name,
                'status'=>$request->status,
            ]);

            session()->flash('edit');
            return redirect()->route('admin.dashboard.service.index');

        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function destroy($request)
    {
        Service::destroy($request->id);
        session()->flash('delete');
        return redirect()->route('admin.dashboard.service.index');
    }
}
