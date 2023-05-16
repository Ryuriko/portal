@extends('layouts.kemahasiswaan')

@section('content')

@include('kemahasiswaan.navbar')

<div class="bg-light">

<div class="row m-0 justify-content-center text-center px-md-5 px-3 py-5">
    <div class="col-md-3 col-5 border-end">
        <p class="text-orange fw-bold">Dosen pembimbing lapangan</p>
        <p>Hj. Sidiq Muhammad. M,Kom.</p>
    </div>
    <div class="col-md-3 col-auto border-end">
        <p class="text-orange fw-bold">Lokasi KKM</p>
        <p>Kp. Kadu Odeng</p>
    </div>
    <div class="col-md-3 col-auto">
        <p class="text-orange fw-bold">Kelompok</p>
        <p>456</p>
    </div>
</div>

<div class="row m-0 text-center px-md-5 my-3">        
    <div class="col text-start px-5 pt-3" style="background: #FFD6B0;">
        <p>
            Perhatian, informasi pembimbing lapangan terkait nomor telepon, email, dan lainnya tidak kami publikasikan pada laman ini untuk menghindari penyalahgunaan data. 
        </p>
    </div>
</div>

<div class="row m-0 justify-content-center my-4 mb-5">
    <div class="col-11 shadow-lg rounded-5 py-4 px-5">

        <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead class="bg-orange">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Mahasiswa/i</th>
                <th scope="col">Prodi</th>
                <th scope="col">Kelas</th>
                <th scope="col">No. HP</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody class="bg-silver">
                @for ($i = 1; $i < 5; $i++)                            
                <tr>
                <td>{{$i}}</td>
                <td>Bayu</td>
                <td>Matematika</td>
                <td>B2</td>
                <td>083828282828</td>
                <td></td>
                </tr>
                @endfor
            </tbody>
            </table>
        </div>
    </div>
</div>

</div>
@endsection