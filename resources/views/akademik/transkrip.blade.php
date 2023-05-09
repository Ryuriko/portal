@extends('layouts.akademik')

@section('content')
<div class="row text-center px-md-5 px-5 my-5">
    <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
        <p class="h4 text">Transkrip Nilai</p>
    </div>
    <div class="col" style="background: #DBDBDB;">
    </div>
</div>

<div class="row justify-content-center mt-3 mb-5">
    <div class="col-11 shadow-lg rounded-5 py-4 px-5">
        <p>Transkrip nilai saat ini</p>
        <div class="table-responsive">
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
                @for ($i = 1; $i < 5; $i++)                            
                <tr>
                <td>{{$i}}</td>
                <td>202{{$i}}</td>
                <td>Ganjil</td>
                <td>{{$i}} MK</td>
                <td>
                    <a href="/akademik/detail/transkrip" class="btn btn-secondary">Detail</a>
                </td>
                </tr>
                @endfor
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection