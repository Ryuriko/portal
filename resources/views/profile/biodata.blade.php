@extends('layouts.profile')

@section('content')
<div class="row m-0 justify-content-center sec-1" id="biodata">
    <div class="col rounded-5 py-md-5 py-4 px-5">
        <form action="" method="post">
          @csrf

          <div class="row m-0">
            <div class="col-md-2 col-4">
              <label class="form-label text-orange" for="nim">NIM</label>
              <input type="text" class="form-control bg-silver" id="nim" name="nim">
            </div>
            <div class="col">
              <label for="nama" class="form-label text-orange">Nama</label>
              <input type="text" class="form-control bg-silver" id="nama" name="nama">
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="fakultas" class="form-label text-orange">Fakultas</label>
              <input type="text" class="form-control bg-silver" id="fakultas" name="fakultas">
            </div>
            <div class="col">
              <label for="prodi" class="form-label text-orange">Program Studi</label>
              <input type="text" class="form-control bg-silver" id="prodi" name="prodi">
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="StatusPerkuliahan" class="form-label text-orange">Status Perkuliahan</label>
              <input type="text" class="form-control bg-silver" id="StatusPerkuliahan" name="StatusPerkuliahan">
            </div>
            <div class="col">
              <label for="TTL" class="form-label text-orange">Tempat, Tanggal Lahir</label>
              <input type="text" class="form-control bg-silver" id="TTL" name="TTL">
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="JenisKelamin" class="form-label text-orange">Jenis Kelamin</label>
              <input type="text" class="form-control bg-silver" id="JenisKelamin" name="JenisKelamin">
            </div>
            <div class="col">
              <label for="NoTelpon" class="form-label text-orange">Nomor Telp/HP</label>
              <input type="text" class="form-control bg-silver" id="NoTelpon" name="NoTelpon">
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="email" class="form-label text-orange">Email</label>
              <input type="text" class="form-control bg-silver" id="email" name="email">
            </div>
            <div class="col">
              <label for="agama" class="form-label text-orange">Agama</label>
              <input type="text" class="form-control bg-silver" id="agama" name="agama">
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="status" class="form-label text-orange">Status</label>
              <input type="text" class="form-control bg-silver" id="status" name="status">
            </div>
            <div class="col mt-auto">
              <button class="btn btn-warning bg-orange text-light w-100 fs-5 fw-bolder">Ubah Data</button>
            </div>
          </div>
          
        </form>
    </div>
</div>

<div class="row m-0 justify-content-center sec-1 border-top border-5 border-danger">
    <div class="col rounded-5 py-4 px-5">

      {{-- Pengumuman --}}
      <div class="row m-0 text-center px-4 my-3">
        <div class="col-1 ms-md-3" style="background: #AF39A1;">
        </div>
        <div class="col text-start text-light pt-3" style="background: #E88814;">
          <p>
            Informasi kepada seluruh mahasiswa yang belum mengisi KRS semester Ganjil, harap segera mengisi KRS dikarenakan batas pengisian KRS sampai tanggal 12 Januari 2023
          </p>
        </div>
      </div>

      <h1 class="h1 text-orange fw-bold mt-5 mb-4">Biodata</h1>

        <form action="" method="post">
          @csrf
          
          <div class="row">
            <div class="col">
              <label for="nik" class="form-label text-orange">NIK</label>
              <input type="text" class="form-control bg-silver" id="nik" name="nik">
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="NamaLengkap" class="form-label text-orange">Nama Lengkap</label>
              <input type="text" class="form-control bg-silver" id="NamaLengkap" name="NamaLengkap">
            </div>
            <div class="col">
              <label for="JenisKelamin" class="form-label text-orange">Jenis Kelamin</label>
              <select class="form-select bg-silver" name="JenisKelamin" id="JenisKelamin">
                <option value="LakiLaki">Laki - Laki</option>
                <option value="perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="TempatLahir" class="form-label text-orange">Tempat Lahir</label>
              <input type="text" class="form-control bg-silver" id="TempatLahir" name="TempatLahir">
            </div>
            <div class="col">
              <label for="TanggalLahir" class="form-label text-orange">Tanggal Lahir</label>
              <input type="text" class="form-control bg-silver" id="TanggalLahir" name="TanggalLahir">
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="agama" class="form-label text-orange">Agama</label>
              <select class="form-select bg-silver" name="agama" id="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
                <option value="budha">Budha</option>
              </select>
            </div>
            <div class="col">
              <label for="npwp" class="form-label text-orange">NPWP</label>
              <input type="text" class="form-control bg-silver" id="npwp" name="npwp">
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="kewarganegraan" class="form-label text-orange">Kewarganegaraan</label>
              <input type="text" class="form-control bg-silver" id="kewarganegraan" name="kewarganegraan">
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="AlamatJalan" class="form-label text-orange">Alamat Jalan</label>
              <input type="text" class="form-control bg-silver" id="AlamatJalan" name="AlamatJalan">
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col-6">
              <label for="desa" class="form-label text-orange">Desa</label>
              <input type="text" class="form-control bg-silver" id="desa" name="desa">
            </div>
            <div class="col">
              <label for="rt" class="form-label text-orange">RT</label>
              <input type="text" class="form-control bg-silver" id="rt" name="rt">
            </div>
            <div class="col">
              <label for="rw" class="form-label text-orange">RW</label>
              <input type="text" class="form-control bg-silver" id="rw" name="rw">
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="kelurahan" class="form-label text-orange">Kelurahan</label>
              <input type="text" class="form-control bg-silver" id="kelurahan" name="kelurahan">
            </div>
            <div class="col">
              <label for="KodePos" class="form-label text-orange">Kode Pos</label>
              <input type="text" class="form-control bg-silver" id="KodePos" name="KodePos">
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="kecamatan" class="form-label text-orange">Kecamatan</label>
              <input type="text" class="form-control bg-silver" id="kecamatan" name="kecamatan">
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="JenisTinggal" class="form-label text-orange">Jenis Tinggal</label>
              <select class="form-select bg-silver" name="JenisTinggal" id="JenisTinggal">
                <option value="islam">Rumah</option>
                <option value="kristen">Sewa</option>
                <option value="hindu">Rumah Orang Tua</option>
                <option value="budha">Rumah Saudara</option>
              </select>
            </div>
            <div class="col">
              <label for="AlatTransportasi" class="form-label text-orange">Alat Transportasi</label>
              <select class="form-select bg-silver" name="AlatTransportasi" id="AlatTransportasi">
                <option value="islam">Motor</option>
                <option value="kristen">Mobil</option>
                <option value="hindu">Angkutan Umum</option>
              </select>
            </div>
          </div>

          <div class="row m-0 mt-2">
            <div class="col">
              <label for="email" class="form-label text-orange">Email</label>
              <input type="email" class="form-control bg-silver" id="email" name="email">
            </div>
          </div>
          
          {{-- Button Simpan --}}
          <div class="row m-0 mt-2">
            <div class="col-6 ms-auto mt-2">
              <button class="btn btn-danger bg-orange text-light w-100 fs-5 fw-bolder">Simpan Perubahan</button>
            </div>
          </div>

        </form>
    </div>
</div>
@endsection