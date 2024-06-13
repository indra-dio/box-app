<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Box;

class BoxController extends Controller
{
    public function index()
    {
        // Mengambil semua data user dari database
        $data = box::all();
    }

    public function getData(Request $request)
    {

        $data = box::all()->toArray();
        return response()->json([$data]);
        // return DataTables::of(rfid::all())->toJson();
        // if ($request->ajax()) {
        //     $data = rfid::all();
        //     return DataTables::of($data)->make(true);
        // }
    }
}
