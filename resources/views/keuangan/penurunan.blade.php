@extends('layouts.keuangan')

@section('content')

<div class="row px-5 mt-5 mb-3">
    <div class="col">
        <p>Total UKT saat ini</p>
        <p>Rp. 4.000.000</p>
    </div>
</div>

<div class="row px-5 mb-5">
    <div class="col-6">
        <label for="tanggal" class="form-label">Permohonan penurunan</label>
        <input type="text" class="form-control bg-silver" id="tanggal" name="tanggal" placeholder="Rp. 0">
      </div>
    <div class="col-12">
        <label for="alasan" class="form-label">Alasan permohonan penurunan</label>
        <textarea class="form-control bg-silver pb-5" id="alasan" rows="3" name="alasan" placeholder="Beritahu alasan anda disini"></textarea>
    </div>
    <div class="col my-4 text-end">
      <button class="btn btn-warning bg-orange px-md-5 px-3 text-light fw-bold">Ajukan permohonan</button>
    </div>
</div>

@endsection