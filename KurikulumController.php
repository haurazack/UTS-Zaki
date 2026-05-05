<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KurikulumControllerWendi extends Controller
{
    public function index()
    {
        $data = DB::table('kurikulum')->get();
        return view('kurikulum.index', compact('data'));
    }
}