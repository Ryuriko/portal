@extends('layouts.kemahasiswaan')

@section('content')

@include('kemahasiswaan.navbar')

<div class="row m-0 px-md-5 px-3 pt-5 bg-light">
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