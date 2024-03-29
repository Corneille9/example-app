<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|unique:users",
            "password" => ["required", "confirmed"],
            "accept_condition" => "required|accepted",
        ]);

//        $request->get("name");
//        $request->input("name");

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->save();

        \Auth::login($user);

        event(new Registered($user));

        return redirect()->route("verification.notice");
    }
}
