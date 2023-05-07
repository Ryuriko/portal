@extends('layouts.akademik')

@section('content')
<div class="row justify-content-center sec-1" id="biodata">
    <div class="col rounded-5 py-md-3 py-2 px-5">

        {{-- Pengumuman --}}
        <div class="row text-center my-3">
            <div class="col-4 text-start bg-orange text-light ps-md-5 pt-2">
                <p class="h4 text">Kartu Rencana Studi</p>
            </div>
            <div class="col" style="background: #DBDBDB;">
            </div>
        </div>

        <a href="#" class="btn fw-bold fs-5 mt-5 text-light bg-orange">Tambah Rencana Studi</a>            

        <div class="row justify-content-center mt-4">
            <div class="col-11 shadow-lg rounded-5 py-4 px-5">
                <p>Kartu rencana studi saat ini</p>

                <table class="table table-striped text-center">
                    <thead class="bg-orange">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tahun Ajaran</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Jumlah Mata Kuliah</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="bg-silver">
                      <tr>
                        <td>1</td>
                        <td>2022</td>
                        <td>Ganjil</td>
                        <td>10 MK</td>
                        <td><a href="#" class="btn btn-dark">Detail</a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>2022</td>
                        <td>Genap</td>
                        <td>8 MK</td>
                        <td><a href="#" class="btn btn-dark">Detail</a></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>2023</td>
                        <td>Ganjil</td>
                        <td>12 MK</td>
                        <td><a href="#" class="btn btn-dark">Detail</a></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-11 shadow-lg rounded-5 py-4 px-5">
                <p>Kartu rencana studi yang telah ditambahkan</p>

                <table class="table table-striped text-center">
                    <thead class="bg-orange">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tahun Ajaran</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Jumlah Mata Kuliah</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody class="bg-silver">
                      <tr>
                        <td>1</td>
                        <td>2022</td>
                        <td>Ganjil</td>
                        <td>10 MK</td>
                        <td><a href="#" class="btn btn-dark">Detail</a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>2022</td>
                        <td>Genap</td>
                        <td>8 MK</td>
                        <td><a href="#" class="btn btn-dark">Detail</a></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>2023</td>
                        <td>Ganjil</td>
                        <td>12 MK</td>
                        <td><a href="#" class="btn btn-dark">Detail</a></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>

    </div>
</div>
@endsection