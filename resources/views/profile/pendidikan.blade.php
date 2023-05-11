@extends('layouts.profile')

@section('content')
<div class="row justify-content-center sec-1 border-top border-5 border-danger">
    <div class="col rounded-5 py-4 px-5">

      {{-- Pengumuman --}}
      <div class="row text-center px-4 my-3">
        <div class="col text-start text-danger px-5 pt-3" style="background: #FFD6B0;">
          <p>
            Informasi kepada seluruh mahasiswa yang belum mengisi KRS semester Ganjil, harap segera mengisi KRS dikarenakan batas pengisian KRS sampai tanggal 12 Januari 2023
          </p>
        </div>
      </div>

        <form action="" method="post">
          @csrf

          <div class="row mt-2">
            <div class="col-3">
              <label for="nisn" class="form-label text-danger">NISN</label>
              <input type="text" class="form-control" id="nisn" name="nisn">
            </div>
            <div class="col">
              <label for="AsalSekolah" class="form-label text-danger">Asal Sekolah</label>
              <input type="text" class="form-control" id="AsalSekolah" name="AsalSekolah">
            </div>
          </div>
          
          {{-- Button Simpan --}}
          <div class="row mt-2">
            <div class="col-6 ms-auto mt-2">
              <button class="btn bg-orange text-light w-100 fs-5 fw-bolder">Simpan Perubahan</button>
            </div>
          </div>

        </form>
    </div>
</div>
@endsection