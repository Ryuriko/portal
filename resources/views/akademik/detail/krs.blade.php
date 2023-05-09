@extends('layouts.akademik')

@section('content')
<div class="row justify-content-center">
    <div class="col rounded-5 py-md-3 py-2 px-5">

        <div class="row text-center px-md-5 my-5">
            <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
                <p class="h4 text">Detail Kartu Rencana Studi</p>
            </div>
            <div class="col" style="background: #DBDBDB;">
            </div>
          </div>
  
          <div class="row jutify-content-between px-md-5">
            <div class="col-md-3 col-6">
              <label for="TahunAkademik" class="form-label">Tahun Akademik</label>
              <input type="text" class="form-control" id="TahunAkademik" name="TahunAkademik" placeholder="2023" disabled>
            </div>
            <div class="col-md-3 col-6">
              <label for="semester" class="form-label">Semester</label>
              <input type="text" class="form-control" id="semester" name="semester" placeholder="GANJIL" disabled>
            </div>
            <div class="col-6">
              <label for="prodi" class="form-label">Program Studi</label>
              <input type="text" class="form-control" id="prodi" name="prodi" placeholder="INFORMATIKA(S1)" disabled>
            </div>
            <div class="col-3">
              <label for="kelas" class="form-label">Kelas</label>
              <input type="text" class="form-control" id="kelas" name="kelas" placeholder="A200" disabled>
            </div>
          </div>
  
          <div class="row jutify-content-between px-md-2 py-2 mx-md-5 mx-3 mt-5 border border-dark rounded-5">
              <div class="col-md-3"><i class="bi bi-check-circle-fill text-success"></i> Pembimbing Akademik</div>
              <div class="col-md-3"><i class="bi bi-x-circle-fill text-danger"></i> Validasi Pembayaran</div>
          </div>
  
          <div class="row justify-content-center mt-5">
              <div class="col-11 shadow-lg rounded-5 py-4 px-5">
                  <p>Kartu rencana studi yang telah ditambahkan</p>
  
                  <div class="table-responsive">
                  <table class="table table-striped text-center">
                      <thead class="bg-orange fs-6">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Kode MK</th>
                          <th scope="col">Nama Mata Kuliah</th>
                          <th scope="col">Dosen</th>
                          <th scope="col">Kelas</th>
                          <th scope="col">Hari & Jam</th>
                          <th scope="col">Ruang</th>
                        </tr>
                      </thead>
                      <tbody class="bg-silver">
                        @for ($i = 1; $i < 5; $i++)                          
                        <tr>
                          <td>{{$i}}</td>
                          <td>MK{{$i}}</td>
                          <td>PBO{{$i}}</td>
                          <td>Prof. Sidiq</td>
                          <td>B{{$i}}</td>
                          <td>Senin, 08:00 Am s/d 10:00</td>
                          <td>Labkom</td>
                        </tr>
                        @endfor
                      </tbody>
                    </table>
                  </div>
                  </div>
          </div>
          
          <div class="row text-center px-md-5 my-3">        
            <div class="col text-start text-danger pt-3" style="background: #FFD6B0;">
              <p class="mx-3">
                Informasi kepada seluruh mahasiswa yang belum mengisi KRS semester Ganjil, harap segera mengisi KRS dikarenakan batas pengisian KRS sampai tanggal 12 Januari 2023
              </p>
            </div>
          </div>
  
          <div class="row justify-content-center px-5">
            <div class="col text-center rounded-5 bg-silver py-2"><i class="bi bi-send-fill"></i> Ajukan permohonan KRS</div>
            <div class="col text-center rounded-5 bg-silver py-2 mx-5"><i class="bi bi-printer-fill"></i> Print kartu rencana studi</div>
            <div class="col text-center rounded-5 bg-silver py-2"><i class="bi bi-printer-fill"></i> Print kartu UTS</div>
          </div>

    </div>
</div>
@endsection