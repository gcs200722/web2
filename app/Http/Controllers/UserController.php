<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function check_login()
    {
        request()->validate([
            'email' => 'required|email|exists:user',
            'password' => 'required|min:6',
        ]);
    }

    public function register()
    {
        return view('register');
    }

    public function check_register()
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'role' => 'required|in:Administrator,Student,Marketing Coordinator,University Marketing Manager',
            'faculty' => 'required|in:Business administration,Graphics and Digital Design,Information technology',
        ]);
        $request = request()->only('name', 'email', 'password', 'role', 'faculty');
        $request['password'] = bcrypt(request('password'));
        User::create($request);

        return redirect()->route('login')->with('message', 'Register successfuly!');
    }
}
