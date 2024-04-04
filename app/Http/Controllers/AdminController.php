<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function home()
    {
        $user = Auth::user();

        return view('admin.home', compact('user'));
    }

    public function showcontribution()
    {
        $contributions = Contribution::all();
        $user = auth()->user(); // Lấy thông tin người dùng hiện tại

        return view('admin.contribution.show', ['contributions' => $contributions, 'user' => $user]);
    }
}
