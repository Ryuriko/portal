@extends('layouts.akademik')

@section('content')
<div class="row m-0 justify-content-center">
    <div class="col rounded-5 py-md-3 py-2 px-5">

        <div class="row m-0 text-center px-md-5 my-5">
            <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
                <p class="h4 text">Buat Kartu Rencana Studi</p>
            </div>
            <div class="col" style="background: #DBDBDB;">
            </div>
        </div>
  
        <div class="row m-0 justify-content-center px-md-5">
            <div class="col-6">
              <label for="TahunAkademik" class="form-label">Tahun Akademik</label>
              <input type="text" class="form-control" id="TahunAkademik" name="TahunAkademik" placeholder="2023" disabled>
            </div>
            <div class="col-6">
              <label for="prodi" class="form-label">Program Studi</label>
              <input type="text" class="form-control" id="prodi" name="prodi" placeholder="INFORMATIKA(S1)" disabled>
            </div>
            <div class="col-6 mt-2">
              <label for="semester" class="form-label">Semester</label>
              <input type="text" class="form-control" id="semester" name="semester" placeholder="GANJIL" disabled>
            </div>
            <div class="col-6 mt-2">
              <label for="kelas" class="form-label">Kelas</label>
              <input type="text" class="form-control" id="kelas" name="kelas" placeholder="A1" disabled>
            </div>
        </div>

        <div class="row m-0 justify-content-around px-md-5 my-5">
          <div class="col col-md-5 text-center shadow px-5 pb-5 rounded-5">
            <p class="text-start my-4">Mata kuliah dan kelas yang anda pilih</p>
            <table class="table ">
              <thead class="bg-orange">
                <tr>
                  <th scope="col"></th>
                  <th scope="col">No</th>
                  <th scope="col">Nama Mata Kuliah</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Hari & Jam</th>
                </tr>
              </thead>
              <tbody>
                @for ($i = 0; $i < 6; $i++)
                <tr>
                  <td><i class="bi bi-x-circle-fill text-danger"></i></td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                @endfor
              </tbody>
            </table>
          </div>
          <div class="col col-md-5 text-center shadow px-5 pb-5 rounded-5 mt-md-0 mt-5">
            <p class="text-start my-4">Pilihan mata kuliah dan kelas</p>
            <table class="table ">
              <thead class="bg-purple">
                <tr>
                  <th scope="col"></th>
                  <th scope="col">No</th>
                  <th scope="col">Nama Mata Kuliah</th>
                  <th scope="col">Kelas</th>
                  <th scope="col">Hari & Jam</th>
                </tr>
              </thead>
              <tbody>
                @for ($i = 0; $i < 6; $i++)
                <tr>
                  <td><i class="bi bi-check-circle-fill text-success"></i></td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                @endfor
              </tbody>
            </table>
          </div>
        </div>
        <div class="col text-end px-5 mx-5 my-5">
          <a href="#" class="btn btn-warning text-light fw-bold bg-orange ms-auto px-5">Simpan</a>
        </div>

    </div>
</div>
@endsection