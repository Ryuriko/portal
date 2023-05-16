@extends('layouts.kemahasiswaan')

@section('content')
<div class="row m-0 text-center px-md-5 px-5 my-5">
    <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
        <p class="h4 text">Kuliah Kerja Mahasiswa</p>
    </div>
    <div class="col" style="background: #DBDBDB;">
    </div>
</div>

<div class="row m-0 jutify-content-center mt-3 border-bottom border-warning border-5 px-md-4 px-3">
    <a href="/kemahasiswaan/kkm" class="col-md-2 col-auto p-md-3 p-2 nav-link fw-bold rounded-top-4 text-center mt-2 mt-md-0 {{Request::is('kemahasiswaan/kkm') ? 'bg-orange text-light' : 'bg-silver text-danger'}}">Formulir Pendaftaran</a>
    <a href="/kemahasiswaan/kkm/dokumen" class="col-md-2 col-auto p-md-3 p-2 mx-1 nav-link fw-bold rounded-top-4 text-center mt-2 mt-md-0 {{Request::is('kemahasiswaan/kkm/dokumen') ? 'bg-orange text-light' : 'bg-silver text-danger'}}">Dokumen</a>
    <a href="/kemahasiswaan/kkm/kelompok" class="col-md-2 col-auto p-md-3 p-2 nav-link fw-bold rounded-top-4 text-center mt-2 mt-md-0 {{Request::is('kemahasiswaan/kkm/kelompok') ? 'bg-orange text-light' : 'bg-silver text-danger'}}">Kelompok</a>
</div>

<div class="row m-0 px-md-5 px-3 my-5">
    <div class="col col-md-4">
      <label for="nim" class="form-label">NIM</label>
      <input type="text" class="form-control bg-silver" id="nim" name="nim" placeholder="2023">
    </div>
    <div class="col col-md-8">
      <label for="nama" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control bg-silver" id="nama" name="nama" placeholder="INFORMATIKA(S1)">
    </div>
    <div class="col-md-6 mt-2">
      <label for="fakultas" class="form-label">Fakultas</label>
      <input type="text" class="form-control bg-silver" id="fakultas" name="fakultas" placeholder="GANJIL">
    </div>
    <div class="col-6 col-md-6 mt-2">
      <label for="prodi" class="form-label">Program Studi</label>
      <input type="text" class="form-control bg-silver" id="prodi" name="prodi" placeholder="A1">
    </div>
    <div class="col-6 col-md-4 mt-2 text-start">
      <label for="UkuranJaket" class="form-label">Ukuran Jaket</label>
      <select class="form-select bg-silver" id="UkuranJaket" name="UkuranJaket" aria-label="Default">
        <option value="l">L</option>
        <option value="s">S</option>
        <option value="m">m</option>
        <option value="xl">XL</option>
        <option value="xxl">XXL</option>
      </select>
    </div>
    <div class="col-12 text-end px-5 mx-5 my-5">
        <a href="#" class="btn btn-warning text-light fw-bold bg-orange px-5 me-2">Simpan</a>
    </div>
</div>
@endsection