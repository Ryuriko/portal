<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function biodata()
    {
        return view('profile.biodata');
    }
    public function keluarga()
    {
        return view('profile.keluarga');
    }
    public function pendidikan()
    {
        return view('profile.pendidikan');
    }
    public function dokumen()
    {
        return view('profile.dokumen');
    }
}
