@extends('layouts.keuangan')

@section('content')

<div class="row m-0 px-5 mt-5 mb-3">
    <div class="col">
        <p>Total UKT saat ini</p>
        <p>Rp. 4.000.000</p>
    </div>
</div>

<div class="row m-0 px-5 mb-5">
    <div class="col-6">
        <label for="tanggal" class="form-label">Permohonan penurunan</label>
        <input type="text" class="form-control bg-silver" id="tanggal" name="tanggal" placeholder="Rp. 0">
      </div>
    <div class="col-12">
        <label for="alasan" class="form-label">Alasan permohonan penurunan</label>
        <textarea class="form-control bg-silver pb-5" id="alasan" rows="3" name="alasan" placeholder="Beritahu alasan anda disini"></textarea>
    </div>
    <div class="col-6 mt-3">
      <label for="rumah" class="form-label text-orange fs-4 fw-bold">Upload kondisi rumah</label>
      <input type="file" class="dropify" data-max-file-size-preview="3M">
    </div>
    <div class="col-6 mt-3">
      <label for="gaji" class="form-label text-orange fs-4 fw-bold">Upload slip gaji</label>
      <input type="file" class="dropify" data-max-file-size-preview="3M">
    </div>
    <div class="col-6 mt-3">
      <label for="sktm" class="form-label text-orange fs-4 fw-bold">Upload surat keterangan tidak mampu</label>
      <input type="file" class="dropify" data-max-file-size-preview="3M">
    </div>
    <div class="col-6 mt-3">
      <label for="kk" class="form-label text-orange fs-4 fw-bold">Upload photo copy kartu keluarga</label>
      <input type="file" class="dropify" data-max-file-size-preview="3M">
    </div>
    <div class="col-6 mt-3">
      <label for="struk" class="form-label text-orange fs-4 fw-bold">Upload rekening listrik, air dan PBB</label>
      <input type="file" class="dropify" data-max-file-size-preview="3M">
    </div>
    <div class="col-6 mt-3">
      <label for="lainlain" class="form-label text-orange fs-4 fw-bold">Upload dokumen lain yang mendukung penurunan</label>
      <input type="file" class="dropify" data-max-file-size-preview="3M">
    </div>
    <div class="col-6 mt-3">
      <label for="sktm" class="form-label text-orange fs-4 fw-bold">Upload surat keterangan tidak mampu</label>
      <input type="file" class="dropify" data-max-file-size-preview="3M">
    </div>
    <div class="col-6 mt-3">
      <label for="kk" class="form-label text-orange fs-4 fw-bold">Upload photo copy kartu keluarga</label>
      <input type="file" class="dropify" data-max-file-size-preview="3M">
    </div>

    <div class="col-12 my-4 text-end">
      <button class="btn btn-warning bg-orange px-md-5 px-3 text-light fw-bold">Ajukan permohonan</button>
    </div>

</div>

@endsection