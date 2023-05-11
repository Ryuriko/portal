@extends('layouts.profile')

@section('content')

<div class="row justify-content-center sec-1" id="biodata">
    <div class="col rounded-5 py-md-5 py-4 px-5">

      <div class="row text-center px-4 my-3">
        <div class="col text-start text-danger px-5 pt-3" style="background: #FFD6B0;">
          <p>
            File yang di unggah tidak boleh melebihi ukuran 2 Mb
          </p>
        </div>
      </div>

        <form action="" method="post">
          @csrf

        <div class="row">
          <div class="col-6">
            <label for="foto" class="form-label text-orange fs-4 fw-bold">Upload pas foto</label>
            <input type="file" class="dropify">
          </div>

          <div class="col-6">
            <label for="akta" class="form-label text-orange fs-4 fw-bold">Upload akta kelahiran</label>
            <input type="file" class="dropify" id="akta" name="akta">
          </div>

          <div class="col-6">
            <label for="kk" class="form-label text-orange fs-4 fw-bold mt-4">Upload kartu keluarga</label>
            <input type="file" class="dropify" id="kk" name="kk">
          </div>

          <div class="col-6">
            <label for="ktp" class="form-label text-orange fs-4 fw-bold mt-4">Upload KTP</label>
            <input type="file" class="dropify" id="ktp" name="ktp">
          </div>

          <div class="col-6">
            <label for="ijazah" class="form-label text-orange fs-4 fw-bold mt-4">Upload ijazah terakhir</label>
            <input type="file" class="dropify" id="ijazah" name="ijazah">
          </div>
          
          <div class="col-6">
            <label for="nilai" class="form-label text-orange fs-4 fw-bold mt-4">Upload transkrip nilai</label>
            <input type="file" class="dropify fs-6" id="nilai" name="nilai">
          </div>

          <div class="col-6 ms-auto my-5">
            <button class="btn bg-orange text-light w-100 fs-5 fw-bolder">Simpan Perubahan</button>
          </div>
        </div>
        </form>
    </div>
</div>
@endsection