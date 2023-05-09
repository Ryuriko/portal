@extends('layouts.administrasi')

@section('content')
<div class="row justify-content-center px-md-5 px-5 my-5">
    <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
        <p class="h4 text">Wisuda</p>
    </div>
    <div class="col" style="background: #DBDBDB;">
    </div>
</div>

<div class="row px-5">
    <div class="col-3">
      <label for="NilaiIPK" class="form-label">Nilai IPK</label>
      <input type="text" class="form-control bg-silver" id="NilaiIPK" name="NilaiIPK">
    </div>
    <div class="col-9">
      <label for="TanggalLulus" class="form-label">Tanggal Lulus Ujian Skripsi</label>
      <input type="text" class="form-control bg-silver" id="TanggalLulus" name="TanggalLulus">
    </div>
    <div class="col-12 mt-2">
      <label for="JudulSkripsi" class="form-label">Judul Skripsi</label>
      <textarea class="form-control bg-silver" id="JudulSkripsi" rows="3" name="JudulSkripsi"></textarea>
    </div>
    <div class="col-6 mt-2">
      <label for="dosen1" class="form-label">Nama Dosen pembimbing 1</label>
      <input type="text" class="form-control bg-silver" id="dosen1" name="dosen1">
    </div>
    <div class="col-6 mt-2">
      <label for="dosen2" class="form-label">Nama Dosen pembimbing 2</label>
      <input type="text" class="form-control bg-silver" id="dosen2" name="dosen2">
    </div>
    <div class="col-6 mt-2">
      <label for="dosen3" class="form-label">Nama Dosen pembimbing 3</label>
      <input type="text" class="form-control bg-silver" id="dosen3" name="dosen3">
    </div>
    <div class="col-6 mt-2">
      <label for="dosen4" class="form-label">Nama Dosen pembimbing 4</label>
      <input type="text" class="form-control bg-silver" id="dosen4" name="dosen4">
    </div>
    <div class="col my-4 text-end">
      <button class="btn btn-warning bg-orange px-md-5 px-3 text-light fw-bold">Simpan</button>
    </div>
    <hr>
</div>

<p class="text-start mx-md-5 mx-3 my-3">Proses verifikasi wisuda</p>
<div class="row justify-content-center">
    <div class="col-md-11 col-10 text-center shadow-lg rounded-5 p-5 mb-5">
        <i class="bi bi-file-earmark-excel fs-1 fw-bold"></i>
        <p class="mt-2">Saat ini anda belum mempunyai data untuk diverifikasi</p>
  </div>
</div>

@endsection