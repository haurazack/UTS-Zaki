<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class NilaiControllerWendi extends Controller
{
    public function index()
    {
        $data = DB::table('nilai')->get(); // 🔥 FIX
        return view('nilai.index', compact('data'));
    }
}