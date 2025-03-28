<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Service;

class FrontController extends Controller
{
    public function index(){
        $cars = Car::where('available_status','active')->get();
        $services = Service::where('status','active')->get();
            
        return view('Frontend.index',compact('cars','services'));
    }
}
