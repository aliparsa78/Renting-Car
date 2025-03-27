<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class FrontController extends Controller
{
    public function index(){
        $cars = Car::get();
            
        return view('Frontend.index',compact('cars'));
    }
}
