@extends('layouts.profile')

@section('content')
<div class="row justify-content-center sec-1" id="biodata">
    <div class="col rounded-5 py-md-5 py-4 px-5">
        <form action="" method="post">
          @csrf

          <div class="row">
            <div class="col-md-2 col-4">
              <label class="form-label text-danger" for="nim">NIM</label>
              <input type="file" class="dropify" data-default-file="url_of_your_file" />
            </div>
            <div class="col">
              <label for="nama" class="form-label text-danger">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col">
              <label for="fakultas" class="form-label text-danger">Fakultas</label>
              <input type="text" class="form-control" id="fakultas" name="fakultas">
            </div>
            <div class="col">
              <label for="prodi" class="form-label text-danger">Program Studi</label>
              <input type="text" class="form-control" id="prodi" name="prodi">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col">
              <label for="StatusPerkuliahan" class="form-label text-danger">Status Perkuliahan</label>
              <input type="text" class="form-control" id="StatusPerkuliahan" name="StatusPerkuliahan">
            </div>
            <div class="col">
              <label for="TTL" class="form-label text-danger">Tempat, Tanggal Lahir</label>
              <input type="text" class="form-control" id="TTL" name="TTL">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col">
              <label for="JenisKelamin" class="form-label text-danger">Jenis Kelamin</label>
              <input type="text" class="form-control" id="JenisKelamin" name="JenisKelamin">
            </div>
            <div class="col">
              <label for="NoTelpon" class="form-label text-danger">Nomor Telp/HP</label>
              <input type="text" class="form-control" id="NoTelpon" name="NoTelpon">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-6 ms-auto mt-auto">
              <button class="btn bg-orange text-light w-100 fs-5 fw-bolder">Simpan Perubahan</button>
            </div>
          </div>
          
        </form>
    </div>
</div>
@endsection