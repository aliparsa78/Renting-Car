<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
        return view('Backend/Service/index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend/Service/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $service = new Service();
        $service->title = $request->title;
        $service->detail= $request->detail;
        $service->status=$request->status;
        $service->save();
        return redirect('/service')->with('success','Service Added Successfuly !');
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
        $service = Service::find($id);
        return view('Backend/Service/edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service =  Service::find($id);
        $service->title = $request->title;
        $service->detail= $request->detail;
        $service->status=$request->status;
        $service->update();
        return redirect('/service')->with('success','Service Updated Successfuly !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect('/service')->with('success','Service Deleted Successfuly !');
    }
}
