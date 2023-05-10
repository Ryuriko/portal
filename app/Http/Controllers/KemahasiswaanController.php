<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KemahasiswaanController extends Controller
{
    public function beasiswa()
    {
        return view('kemahasiswaan.beasiswa');
    }
    public function kkm()
    {
        return view('kemahasiswaan.kkm');
    }
    public function prestasi()
    {
        return view('kemahasiswaan.prestasi');
    }
    public function simkatmawa()
    {
        return view('kemahasiswaan.simkatmawa');
    }
    

    // Additional
    public function dokumen()
    {
        return view('kemahasiswaan.kkm.dokumen');
    }
    public function kelompok()
    {
        return view('kemahasiswaan.kkm.kelompok');
    }

}