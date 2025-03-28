<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;

class UserController extends Controller
{
    public function register2(Request $req){
        return view('auth.register2');
    }
    public function register_stp2(Request $request)
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

    public function profile(){
        $user = Auth::user();
        return view('Frontend.users.index',compact('user'));
    }

    public function update_user(Request $request, String $id)
    {
        $user = User::find($id);
        $user->firstname = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
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

    public function changepassword(Request $request )
    {
        $request->validate([
            'current_password'=>['required'],
            'new_password'=>['required','min:8','confirmed'],
        ]);
        $user = Auth::user();
        if(!Hash::check($request->current_password,$user->password)){
            return back()->withErrors(['current_password'=>'Current password incorrect']);
        }else{
           return "yes";
        }
    }
}
