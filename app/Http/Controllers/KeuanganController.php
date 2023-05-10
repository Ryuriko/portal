<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    public function ukt()
    {
        return view('keuangan.ukt');
    }
    public function cuti()
    {
        return view('keuangan.cuti');
    }
    public function penangguhan()
    {
        return view('keuangan.penangguhan');
    }
    public function penurunan()
    {
        return view('keuangan.penurunan');
    }
}
