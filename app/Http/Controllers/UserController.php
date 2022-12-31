<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\user_table;
use Session;

class UserController extends Controller
{
    //
    public function saveRegistration( Request $request){
        \Log::info(json_encode($request->all()));
        
        $newReg = new user_table;
        $newReg->firstName = $request->txtfirstName;
        $newReg->middleName = $request->txtmiddleName;
        $newReg->lastName = $request->txtlastName;
        $newReg->email = $request->txtemail;
        $newReg->password = hash::make($request->txtpassword);
        $newReg->save();

        return ('Submission Successful');
    }

    public function login(){
        return view ('login');
    }

    public function userAuth(Request $request){
        $user = user_table::where(['email' => $request->txtemail])->first();

        if(!$user || !hash::check($request->txtpassword, $user->password)){
            return "Unknown User Account";
        }
        else
        {
            $request->session()->put('user', $user);
            return redirect('/');
        }
    }

    public function logout(){
        Session::forget('user');
        return redirect('/login');
    }
}
