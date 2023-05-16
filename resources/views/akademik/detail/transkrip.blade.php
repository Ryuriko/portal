@extends('layouts.akademik')

@section('content')
<div class="row m-0 text-center px-md-5 px-5 my-5">
    <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
        <p class="h4 text">Transkrip Nilai</p>
    </div>
    <div class="col" style="background: #DBDBDB;">
    </div>
</div>

<div class="px-5 mt-5 table-responsive">
    <table class="table table-borderless">
        <tbody>
          <tr>
            <td>Tahun Akademik</td>
            <td>2023</td>
          </tr>
          <tr>
            <td>Semester</td>
            <td>4</td>
          </tr>
          <tr>
            <td>Program Studi</td>
            <td>INFORMATIKA (S1)</td>
          </tr>
          <tr>
            <td>Konsentrasi</td>
            <td>-</td>
          </tr>
        </tbody>
      </table>
</div>

<div class="row m-0 justify-content-center mt-3 mb-5">
    <div class="col-11 shadow-lg rounded-5 py-4 px-5">
        <p>Nilai semester ganjil</p>

        <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead class="bg-orange">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Kode MK</th>
                <th scope="col">Nama Mata Kuliah</th>
                <th scope="col">SKS</th>
                <th scope="col">T/P</th>
                <th scope="col">Nilai</th>
                </tr>
            </thead>
            <tbody class="bg-silver">
                @for ($i = 1; $i < 5; $i++)                            
                <tr>
                <td>{{$i}}</td>
                <td>MK{{$i}}</td>
                <td>PBO{{$i}}</td>
                <td>3</td>
                <td>T</td>
                <td>A</td>
                </tr>
                @endfor
            </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row m-0 justify-content-center mt-3 mb-5">
    <div class="col-11 shadow-lg rounded-5 py-4 px-5">
        <p>Nilai semester genap</p>

        <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead class="bg-orange">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Kode MK</th>
                <th scope="col">Nama Mata Kuliah</th>
                <th scope="col">SKS</th>
                <th scope="col">T/P</th>
                <th scope="col">Nilai</th>
                </tr>
            </thead>
            <tbody class="bg-silver">
                @for ($i = 1; $i < 5; $i++)                            
                <tr>
                <td>{{$i}}</td>
                <td>MK{{$i}}</td>
                <td>PBO{{$i}}</td>
                <td>3</td>
                <td>T</td>
                <td>A</td>
                </tr>
                @endfor
            </tbody>
            </table>
        </div>
    </div>
</div>
@endsection