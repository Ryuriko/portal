@extends('layouts.profile')

@section('content')
<div class="row justify-content-center sec-1">
    <div class="col rounded-5 py-md-5 py-4 px-5">
      <p class="h3 text-danger fw-bold mt-md-5 mb-4">Informasi Ayah</p>

      {{-- Pengumuman --}}
      <div class="row text-center px-4 my-3">
        <div class="col-1 ms-md-3" style="background: #AF39A1;">
        </div>
        <div class="col text-start text-light pt-3" style="background: #E88814;">
          <p>
            Informasi kepada seluruh mahasiswa yang belum mengisi KRS semester Ganjil, harap segera mengisi KRS dikarenakan batas pengisian KRS sampai tanggal 12 Januari 2023
          </p>
        </div>
      </div>

        <form action="" method="post">
          @csrf

          <div class="row">
            <div class="col">
              <label for="nik" class="form-label text-danger">NIK</label>
              <input type="text" class="form-control" id="nik" name="nik">
            </div>
            <div class="col">
              <label for="NamaLengkap" class="form-label text-danger">Nama Lengkap</label>
              <input type="text" class="form-control" id="NamaLengkap" name="NamaLengkap">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col">
              <label for="TempatLahir" class="form-label text-danger">Tempat Lahir</label>
              <input type="text" class="form-control" id="TempatLahir" name="TempatLahir">
            </div>
            <div class="col">
              <label for="TanggalLahir" class="form-label text-danger">Tanggal Lahir</label>
              <input type="text" class="form-control" id="TanggalLahir" name="TanggalLahir">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col">
              <label for="pendidikan" class="form-label text-danger">Pendidikan</label>
              <input type="text" class="form-control" id="pendidikan" name="pendidikan">
            </div>
            <div class="col">
              <label for="pekerjaan" class="form-label text-danger">Pekerjaan</label>
              <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col">
                <label for="penghasilan" class="form-label text-danger">Penghasilan</label>
                <select class="form-select" name="penghasilan" id="penghasilan">
                  <option value="<500k"><span> < Rp. 500.000 </span></option>
                  <option value=">500k">> Rp. 500.000</option>
                </select>
            </div>
          </div>
    </div>
</div>

<hr>

<div class="row justify-content-center">
    <div class="col rounded-5 py-md-3 py-2 px-5">
      <p class="h3 text-danger fw-bold">Informasi Ibu</p>

          <div class="row">
            <div class="col">
              <label for="nik" class="form-label text-danger">NIK</label>
              <input type="text" class="form-control" id="nik" name="nik">
            </div>
            <div class="col">
              <label for="NamaLengkap" class="form-label text-danger">Nama Lengkap</label>
              <input type="text" class="form-control" id="NamaLengkap" name="NamaLengkap">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col">
              <label for="TempatLahir" class="form-label text-danger">Tempat Lahir</label>
              <input type="text" class="form-control" id="TempatLahir" name="TempatLahir">
            </div>
            <div class="col">
              <label for="TanggalLahir" class="form-label text-danger">Tanggal Lahir</label>
              <input type="text" class="form-control" id="TanggalLahir" name="TanggalLahir">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col">
              <label for="pendidikan" class="form-label text-danger">Pendidikan</label>
              <input type="text" class="form-control" id="pendidikan" name="pendidikan">
            </div>
            <div class="col">
              <label for="pekerjaan" class="form-label text-danger">Pekerjaan</label>
              <input type="text" class="form-control" id="pekerjaan" name="pekerjaan">
            </div>
          </div>

          <div class="row mt-2">
            <div class="col">
                <label for="penghasilan" class="form-label text-danger">Penghasilan</label>
                <select class="form-select" name="penghasilan" id="penghasilan">
                  <option value="<500k"><span> < Rp. 500.000 </span></option>
                  <option value=">500k">> Rp. 500.000</option>
                </select>
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-6 ms-auto mt-2">
              <button class="btn bg-orange text-light w-100 fs-5 fw-bolder">Simpan Perubahan</button>
            </div>
          </div>
          
        </form>
    </div>
</div>


@endsection