@extends('layouts.keuangan')

@section('content')

<div class="row p-5 mb-5">
    <div class="col-12">
        <label for="alasan" class="form-label">Alasan pengajuan permohonan penangguhan</label>
        <textarea class="form-control bg-silver py-5" id="alasan" rows="3" name="alasan"></textarea>
    </div>
    <div class="col col-md-6 mt-3">
      <label for="tanggal" class="form-label">Tanggal pembayaran</label>
      <input type="date" class="form-control bg-silver" id="tanggal" name="tanggal">
    </div>
    <div class="col col-md-6 mt-3">
      <label for="jumlah" class="form-label">Jumlah</label>
      <input type="text" class="form-control bg-silver" id="jumlah" name="jumlah">
    </div>
    <div class="col my-4 text-end">
      <button class="btn btn-warning bg-orange px-md-5 px-3 text-light fw-bold">Ajukan permohonan</button>
    </div>
</div>

@endsection