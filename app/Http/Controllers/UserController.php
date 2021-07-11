<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(Request $req): Redirector|string|RedirectResponse|Application
    {
        $user = User::query()
            ->where(['email' => $req->email])
            ->first();

        if (!$user || !Hash::check($req->password, $user->password)) {
            return redirect()->back()
                ->with('msg:error', "Username or password is not correct");
        } else {
            Auth::login($user);
            return redirect('/');
        }
    }


    public function register(Request $req): Redirector|Application|RedirectResponse
    {
        //return $req->input();
        $user = new User;
        $user->name = request()->post('name');
        $user->email = request()->post('email');
        $user->password = hash::make(request()->post('password'));
        $user->save();
        return redirect('/login');
    }
}
