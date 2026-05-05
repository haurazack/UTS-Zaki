<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KelasControllerWendi extends Controller
{
    public function index()
    {
        $data = DB::table('kelas')->get(); // 🔥 FIX DI SINI
        return view('kelas.index', compact('data'));
    }
}
