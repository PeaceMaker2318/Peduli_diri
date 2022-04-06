<?php

namespace App\Http\Controllers;
use Hash;
use App\User;
use Illuminate\Http\Request;
use Auth;
class userController extends Controller
{
    public function index(){
        $id = Auth::user()->id;
        $user = User::find($id);        



        return view('user.profile',compact('user'));
    }
    public function update(Request $request , $id){
        $user = User::find($id);
     
        $user->update($request->all());
     if ($request->hasFile('foto')){
         $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
         $user->foto = $request->file('foto')->getClientOriginalName();
         $user->save();
     }
        return redirect ('/profile');   
    
    
}
    public function changepassword(Request $request){
        $id = Auth::user()->id;
        $user = User::find($id);
       
        
        if (!(Hash::check($request->currentpassword, Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->currentpassword, $request->newpassword) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->currentpassword);
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");
       


    }
}
