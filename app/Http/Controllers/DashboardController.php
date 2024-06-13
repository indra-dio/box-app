<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Rfid;
use App\Models\Box;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboards.index');
    }
}