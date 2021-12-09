<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user-> password))
        {
            return "username or Password is not matched";
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/login');
        }
    }
    function register(Request $req)
    {
        // return $req->input();
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        alert()->success('we will contact you soon')->presistent('close')->autoclose(3500);
        return redirect('/login');
    }
}
