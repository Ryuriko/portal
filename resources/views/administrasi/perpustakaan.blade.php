@extends('layouts.administrasi')

@section('content')
<div class="row m-0 justify-content-center px-md-5 px-5 my-5">
    <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
        <p class="h4 text">Perpustakaan</p>
    </div>
    <div class="col" style="background: #DBDBDB;">
    </div>
</div>

{{-- navbar --}}
<div class="row m-0 mt-3 border-bottom border-warning border-5 px-md-5 px-3">
    <a href="/administrasi/perpustakaan" class="col-md-2 col-6 p-md-3 p-2 nav-link fw-bold rounded-top-4 text-center me-1 mt-2 mt-md-0 {{Request::is('administrasi/perpustakaan') ? 'bg-orange text-light' : 'bg-silver text-danger'}}">Peminjaman</a>
    <a href="/administrasi/perpustakaan/riwayat" class="col-md-2 col-5 p-md-3 p-2 nav-link fw-bold rounded-top-4 text-center mt-2 mt-md-0 {{Request::is('administrasi/perpustakaan/riwayat') ? 'bg-orange text-light' : 'bg-silver text-danger'}}">Riwayat Peminjaman</a>
</div>

<div class="row m-0 justify-content-between px-5 my-5">
    <div class="col col-md-5 rounded-5 bg-orange ms-md-5 me-md-0 me-3">
        <img class="img-fluid d-block my-4" src="{{asset('media/administrasi/profile.png')}}">
        <div class="row justify-content-between py-4 px-3">
            <div class="col">
                <img class="img-fluid" src="{{asset('media/administrasi/miniatur.png')}}">
            </div>
            <div class="col text-end mt-auto">
                <img class="img-fluid" src="{{asset('media/administrasi/barcode.png')}}">
            </div>
        </div>
    </div>
    <div class="col col-md-5 rounded-5 bg-orange me-md-5 ms-md-0 ms-3 py-md-5 py-md-5 py-4 px-0">
        <div class="back-card"></div>
    </div>
</div>

<div class="row m-0 px-5 mb-5">
    <div class="col-12">
      <label for="judul" class="form-label">Judul Buku Pinjam</label>
      <input type="text" class="form-control bg-silver" id="judul" name="judul">
    </div>
    <div class="col-7 mt-2">
      <label for="BanyakEksampler" class="form-label">Banyak Eksampler</label>
      <input type="text" class="form-control bg-silver" id="BanyakEksampler" name="BanyakEksampler">
    </div>
    <div class="col-7 mt-2">
      <label for="tanggal" class="form-label">Tanggal peminjaman</label>
      <input type="text" class="form-control bg-silver" id="tanggal" name="tanggal">
    </div>
    <div class="col-12 my-4">
      <button class="btn btn-warning bg-orange px-md-5 px-3 text-light fw-bold">Pinjam</button>
    </div>
</div>

@endsection