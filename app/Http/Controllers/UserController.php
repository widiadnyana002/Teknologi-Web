<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function loginPage(Request $request){
        $user= User::where(['email'=>$request->email])->first();
        if(!$user || !Hash::check($request->password,$user->password)){
            return "Username and password is not matched";
        } else {
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }
}
