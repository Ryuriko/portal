@extends('layouts.akademik')

@section('content')
<div class="row text-center px-md-5 px-5 my-5">
    <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
        <p class="h4 text">Riwayat Peminjaman</p>
    </div>
    <div class="col" style="background: #DBDBDB;">
    </div>
</div>

<div class="row mt-3 border-bottom border-warning border-5 px-md-5 px-3">
    <a href="/administrasi/perpustakaan" class="col-md-2 col-6 p-md-3 p-2 nav-link fw-bold rounded-top-4 text-center me-1 mt-2 mt-md-0 {{Request::is('administrasi/perpustakaan') ? 'bg-orange text-light' : 'bg-silver text-danger'}}">Peminjaman</a>
    <a href="/administrasi/perpustakaan/riwayat" class="col-md-2 col-5 p-md-3 p-2 nav-link fw-bold rounded-top-4 text-center mt-2 mt-md-0 {{Request::is('administrasi/perpustakaan/riwayat') ? 'bg-orange text-light' : 'bg-silver text-danger'}}">Riwayat Peminjaman</a>
</div>

<div class="row m-0 justify-content-center my-5">
    <div class="col-11 shadow-lg rounded-5 py-4 px-5">
        <p>Buku sedang dalam permohonan pinjam</p>

        <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead class="bg-orange">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Banyak Eksampler</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Status verifikasi</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="bg-silver">
                @for ($i = 1; $i < 5; $i++)                            
                <tr>
                <td>{{$i}}</td>
                <td>Bayu</td>
                <td>Matematika</td>
                <td>12 Desember 2022</td>
                <td>Sedang ditinjau</td>
                <td></td>
                </tr>
                @endfor
            </tbody>
            </table>
        </div>
    </div>
</div>

<div class="row m-0 justify-content-center mt-3 mb-5">
    <div class="col-11 shadow-lg rounded-5 py-4 px-5">
        <p>Buku dalam masa peminjaman</p>

        <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead class="bg-orange">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Banyak eksampler</th>
                <th scope="col">Tanggal pinjam</th>
                <th scope="col">Tanggal pengembalian</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="bg-silver">
                @for ($i = 1; $i < 5; $i++)                            
                <tr>
                <td>{{$i}}</td>
                <td>Bayu</td>
                <td>Matematika</td>
                <td>12 Desember 2022</td>
                <td>18 Desember 2022</td>
                <td></td>
                </tr>
                @endfor
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection