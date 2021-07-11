<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])->first();
        if (!$user || !Hash::check($req->password, $user->password)) {
            return "Username or password is not correct";
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }
    function register(Request $req)
    {
        //return $req->input();
        $user = new User;
        $user->name=request()->post('name');
        $user->email=request()->post('email');
        $user->password=hash::make(request()->post('password'));
        $user->save();
        return redirect('/login');
    }
}
