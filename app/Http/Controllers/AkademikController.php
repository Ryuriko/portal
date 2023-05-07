<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkademikController extends Controller
{
    public function krs()
    {
        return view('akademik.krs');
    }
    public function ifm()
    {
        return view('akademik.ifm');
    }
    public function perkuliahan()
    {
        return view('akademik.perkuliahan');
    }
    public function khs()
    {
        return view('akademik.khs');
    }
    public function transkrip()
    {
        return view('akademik.transkrip');
    }
}
