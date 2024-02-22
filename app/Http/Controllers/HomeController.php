<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $nama = 'Luffy D Monkey';
        return view('home', ['nama'=> $nama]);
    }
    public function biodata(){
        $nama = 'Luffy D Monkey';
        $mapel = ['Kualitas perangkat lunak', 'Mobile', 'Web'];
        return view('home', ['nama' => $nama, 'mapel' => $mapel]);
    }
}
