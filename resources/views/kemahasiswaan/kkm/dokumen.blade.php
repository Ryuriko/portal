@extends('layouts.kemahasiswaan')

@section('content')
<div class="row text-center px-md-5 px-5 my-5">
    <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
        <p class="h4 text">Kuliah Kerja Mahasiswa</p>
    </div>
    <div class="col" style="background: #DBDBDB;">
    </div>
</div>

<div class="row jutify-content-center mt-3 border-bottom border-warning border-5 px-md-4 px-3">
    <a href="/kemahasiswaan/kkm" class="col-md-2 col-auto p-md-3 p-2 nav-link fw-bold rounded-top-4 text-center mt-2 mt-md-0 {{Request::is('kemahasiswaan/kkm') ? 'bg-orange text-light' : 'bg-silver text-danger'}}">Formulir Pendaftaran</a>
    <a href="/kemahasiswaan/kkm/dokumen" class="col-md-2 col-auto p-md-3 p-2 mx-1 nav-link fw-bold rounded-top-4 text-center mt-2 mt-md-0 {{Request::is('kemahasiswaan/kkm/dokumen') ? 'bg-orange text-light' : 'bg-silver text-danger'}}">Dokumen</a>
    <a href="/kemahasiswaan/kkm/kelompok" class="col-md-2 col-auto p-md-3 p-2 nav-link fw-bold rounded-top-4 text-center mt-2 mt-md-0 {{Request::is('kemahasiswaan/kkm/kelompok') ? 'bg-orange text-light' : 'bg-silver text-danger'}}">Kelompok</a>
</div>

<div class="row text-center px-md-5 my-4">        
    <div class="col text-start text-danger pt-3" style="background: #FFD6B0;">
        <p class="mx-3">
            Informasi kepada seluruh mahasiswa yang belum mengisi KRS semester Ganjil, harap segera mengisi KRS dikarenakan batas pengisian KRS sampai tanggal 12 Januari 2023
        </p>
    </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@endsection