@extends('layouts.keuangan')

@section('content')
<div class="row text-center px-md-5 my-5">        
    <div class="col-1 bg-danger pt-3">
    </div>
    <div class="col text-start bg-dark text-light pt-3" style="background: #FFD6B0;">
        <p class="mx-3">
            Permintaan penurunan UKT sedang dalam tahap verifikasi oleh admin
        </p>
    </div>
</div>

<div class="row justify-content-center mt-3 mb-5">
    <div class="col-11 shadow-lg rounded-5 py-4 px-5">
        <p>Uang Kuliah Tunggal (UKT)</p>

        <div class="table-responsive">
            <table class="table table-striped text-center">
                <thead class="bg-orange">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tahun Ajaran</th>
                    <th scope="col">Semester</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Besar Biaya</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-silver">
                    @for ($i = 1; $i < 5; $i++)                            
                    <tr>
                    <td>{{$i}}</td>
                    <td>202{{$i}}</td>
                    <td>Ganjil</td>
                    <td>Rp. 400.000</td>
                    <td>{{$i+6}}</td>
                    @if ($i == 4)
                        <td class="bg-secondary text-light fw-bold">Belum Bayar</td>
                    @else
                        <td class="bg-success text-light fw-bold">Lunas</td>
                    @endif
                    <td><a href="#" class="btn btn-secondary">Detail</a></td>

                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>

        <div class="col-12 mt-3 text-end">
            <a href="#" class="btn btn-warning text-light fw-bold p-2 bg-orange"><i class="bi bi-printer-fill"></i> Surat bebas tunggakan</a></div>
        </div>
</div>

@endsection