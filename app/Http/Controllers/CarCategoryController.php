<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarCategory;

class CarCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys = CarCategory::all();
        return view('/Backend/Cars/Category/index',compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend/Cars/Category/create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new CarCategory();
        $category->name = $request->name;
        $category->available_status = $request->status;
        $category->save();
        return redirect('/car_category');
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
        $category = Carcategory::find($id);
        return view('/Backend/Cars/Category/edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = CarCategory::find($id);
        $category->name = $request->name;
        $category->available_status = $request->status;
        $category->update();
        return redirect('/car_category')->with('success','Car Category has been updated successfuly!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = CarCategory::find($id);
        $delete = $category->delete();
        if($delete){
            return back();
        }else{
            return "something went wrong !";
        }
    }
}
