<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // Mengambil semua data user dari database
        $users = User::all();

        // Meneruskan data ke view
        return view('users.index', compact('users'));
    }
}