<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function gambar(){
        return view('erd');
    }
    public function create(){
        return view('create');
    }

    public function index(){
        $proyek = DB::table('proyek')->get();
        return view('indexProyek', compact('proyek'));
    }
}
