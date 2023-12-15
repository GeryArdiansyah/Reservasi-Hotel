<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('Beranda');
    }

    public function index1()
    {
        return view('LihatKamar');
    }
    public function index2()
    {
        return view('Kamar Junior');
    }
    public function index3()
    {
        return view('Kamar Executive');
    }
    public function index4()
    {
        return view('Kamar Precidential');
    }
    public function index5()
    {
        return view('Kamar Deluxe');
    }
    public function index6()
    {
        return view('Kamar Premiere');
    }
    public function index7()
    {
        return view('Kamar Premiere Twin');
    }
}
