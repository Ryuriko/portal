<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrasiController extends Controller
{
    public function PengajuanCuti()
    {
        return view('administrasi.PengajuanCuti');
    }
    public function wisuda()
    {
        return view('administrasi.wisuda');
    }
    public function magang()
    {
        return view('administrasi.magang');
    }
    public function PindahProdi()
    {
        return view('administrasi.PindahProdi');
    }
    public function KeluarUntirta()
    {
        return view('administrasi.KeluarUntirta');
    }
    public function perpustakaan()
    {
        return view('administrasi.perpustakaan');
    }
    public function RiwayatPeminjaman()
    {
        return view('administrasi.RiwayatPeminjaman');
    }
}
