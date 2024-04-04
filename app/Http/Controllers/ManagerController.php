<?php

namespace App\Http\Controllers;

class ManagerController extends Controller
{
    public function home()
    {
        return view('manager.home');
    }
}
