@extends('layouts.administrasi')

@section('content')
<div class="row justify-content-center px-md-5 px-5 my-5">
    <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
        <p class="h4 text">Keluar Universitas Sultan Ageng Tirtayasa</p>
    </div>
    <div class="col" style="background: #DBDBDB;">
    </div>
</div>

<div class="row px-5">
    <div class="col-7">
      <label for="instansi" class="form-label">Perguruan tinggi yang dituju</label>
      <input type="text" class="form-control bg-silver" id="instansi" name="instansi">
    </div>
    <div class="col-12 mt-2">
        <label for="JudulSkripsi" class="form-label">Alasan</label>
        <textarea class="form-control bg-silver" id="JudulSkripsi" rows="3" name="JudulSkripsi"></textarea>
    </div>
    <div class="col my-4 text-end">
      <button class="btn btn-warning bg-orange px-md-5 px-3 text-light fw-bold">Simpan</button>
    </div>
    <hr>
</div>

<p class="text-start mx-md-5 mx-3 my-3">Proses verifikasi keluar Universitas Sultan Ageng Tirtayasa</p>
<div class="row justify-content-center">
    <div class="col-md-11 col-10 text-center shadow-lg rounded-5 p-5 mb-5">
        <i class="bi bi-file-earmark-excel fs-1 fw-bold"></i>
        <p class="mt-2">Saat ini anda belum mempunyai data untuk diverifikasi</p>
  </div>
</div>

@endsection