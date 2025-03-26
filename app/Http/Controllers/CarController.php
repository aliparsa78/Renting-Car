<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\CarCategory;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        $categorys = CarCategory::get();
        return view('Backend/Cars/index',compact('categorys','cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorys = CarCategory::get();

        return view('/Backend/Cars/create',compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $car = new Car();
        $car->category_id = $request->category_id;
        $car->name = $request->name;
        $car->model = $request->model;
        $car->color = $request->color;
        $car->license_plate = $request->license_plate;
        $car->Price_per_day = $request->price_perday;
        $car->available_status = $request->status;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $exe = $file->getClientOriginalExtension();
            $filename = time().'.'.$exe;
            $file->move('Car',$filename);
            $car->image = $filename;
            $car->save();
            return redirect('/cars')->with('success','Car has been added successfuly !');
        }else{
            return "not image";
        }
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
        $categorys = CarCategory::all();
        $car = Car::find($id);
        return view('Backend/Cars.edit',compact('categorys','car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $car = Car::find($id);
        $car->category_id = $request->category_id;
        $car->name = $request->name;
        $car->model = $request->model;
        $car->color = $request->color;
        $car->license_plate = $request->license_plate;
        $car->Price_per_day = $request->price_perday;
        $car->available_status = $request->status;
        if($request->hasFile('image')){
            $file = $request->file('image');
            $exe = $file->getClientOriginalExtension();
            $filename = time().'.'.$exe;
            $file->move('Car',$filename);
            $car->image = $filename;
        }
        $car->update();
        return redirect('/cars')->with('success','Car information updated successfuly! ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::find($id);
        $car->delete();
        return back()->with('danger','Car has been deleted !');
    }

    public function test(Request $req)
    {
        return back()->with('success','Data is correct');
    }
}
