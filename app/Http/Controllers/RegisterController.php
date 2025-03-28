<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class RegisterController extends Controller
{
    public function register2(Request $req){
        return view('auth.register2');
    }
    public function update_user(Request $request)
    {
        $user = Auth::user();
        $user->mobile = $request->mobile;  
        $user->id_number = $request->id_number;  
        $user->job = $request->job;  
        if($request->hasFile('profile')){
            $profile = $request->profile;
            $exe = $profile->getClientOriginalExtension();
            $fileName = time().'.'.$exe;
            $profile->move('profile',$fileName);
            $user->profile_path = $fileName;
        }
        $user->update();
        return redirect('/dashboard');
    }
}
