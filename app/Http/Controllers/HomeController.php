<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $nama = "Melinda Naurah Salsabila";
        $umur = 19;
        $mapel = ["Laravel", "Flutter"];

        return view('home', compact('nama', 'umur', 'mapel'));
    }
}