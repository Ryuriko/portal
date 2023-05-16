@extends('layouts.skpi')

@section('content')
<div class="row m-0 text-center px-md-5 px-5 my-5">
    <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
        <p class="h4 text">SKPI</p>
    </div>
    <div class="col" style="background: #DBDBDB;">
    </div>
</div>

<div class="col-12 fs-5 px-5">
    <p class="fw-bold">Tambah Aktifitas Mahasiswa</p>
</div>

<div class="row m-0 px-5 py-3 mb-5">
    <div class="col-6">
      <label for="nim" class="form-label">NIM</label>
      <input type="text" class="form-control bg-silver" id="nim" name="nim">
    </div>
    <div class="col-6">
      <label for="nama" class="form-label">Nama Lengkap</label>
      <input type="text" class="form-control bg-silver" id="nama" name="nama">
    </div>
    <div class="col-6 mt-3">
      <label for="angkatan" class="form-label">Angkatan</label>
      <input type="text" class="form-control bg-silver" id="angkatan" name="angkatan">
    </div>
    <div class="col-6 mt-3">
      <label for="bidang" class="form-label">Bidang</label>
      <input type="text" class="form-control bg-silver" id="bidang" name="bidang">
    </div>
    <div class="col-6 mt-3">
      <label for="lingkup" class="form-label">Lingkup</label>
      <input type="text" class="form-control bg-silver" id="lingkup" name="lingkup">
    </div>
    <div class="col-6 mt-3">
      <label for="kegiatan" class="form-label">Nama Kegiatan</label>
      <input type="text" class="form-control bg-silver" id="kegiatan" name="kegiatan">
    </div>
    <div class="col-6 mt-3">
      <label for="waktu" class="form-label">Waktu pelaksanaan lomba</label>
      <input type="date" class="form-control bg-silver" id="waktu" name="waktu">
    </div>
    <div class="col-6 mt-3">
      <label for="prestasi" class="form-label">Prestasi yang diraih</label>
      <select class="form-select bg-silver" id="prestasi" name="prestasi" aria-label="Default">
        <option value="l">Juara Umum</option>
        <option value="s">Juara I</option>
        <option value="m">Juara II</option>
        <option value="xl">Juara III</option>
        <option value="xxl">Juara Harapan I</option>
        <option value="xxl">Juara Harapan II</option>
        <option value="xxl">Juara Harapan III</option>
    </select>
    </div>
    <div class="col my-4 text-end">
      <button class="btn btn-warning bg-orange px-md-5 px-3 text-light fw-bold">Ajukan permohonan</button>
    </div>
</div>

@endsection