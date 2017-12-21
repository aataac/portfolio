<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function admin_password_change_page()
    {
        return view('admin_panel.admin_password_change');        
    }



// public function admin_password_change(Request $request)
// {
//     $request->validate([
//         'current_password' => 'required',
//         'password' => 'required',
//         'password_confirmation' => 'required|same:password',    
//       ]);
//         die(Hash::make($request->current_password) . ' : ' . auth()->user()->password) . $user->setRememberToken(Str::random(60));

//     $user = auth()->user();
//     if( $user->password == Hash::make($request->current_password)){
//         $user->password = Hash::make($request->password);
//         $user->save();
//         return view('admin_panel.admin_password_change')->with('status', 'mot de passe modifier');
//     }
//     return view('admin_panel.admin_password_change')->with('status', 'le mot de passe actuelle ne correspond pas');

// }

public function admin_password_change(Request $request){
    if (!(Hash::check($request->get('current-password'), auth()->user()->password))) {
    // The passwords matches
    return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
    }
    if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
    //Current password and new password are same
    return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
    }
    $validatedData = $request->validate([
    'current-password' => 'required',
    'new-password' => 'required|string|min:6|confirmed',
    ]);
    //Change Password
    $user = auth()->user();
    $user->password = bcrypt($request->get('new-password'));
    $user->save();
    return redirect()->back()->with("success","Password changed successfully!");
    }
    

}

