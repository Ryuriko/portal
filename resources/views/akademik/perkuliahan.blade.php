@extends('layouts.akademik')

@section('content')
<div class="row justify-content-center sec-1" id="biodata">
    <div class="col rounded-5 py-md-3 py-2 px-5">

        {{-- Pengumuman --}}
        <div class="row text-center my-3">
            <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
                <p class="h4">Perkuliahan</p>
            </div>
            <div class="col" style="background: #DBDBDB;">
            </div>
        </div>

        <p class="ms-md-5 ms-3 mt-5 fs-5">Jadwal Perkuliahan</p>
        <div class="row justify-content-center">
            <div class="col-11 shadow-lg rounded-5 py-5 px-5">

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

        
        <p class="ms-md-5 ms-3 mt-5 fs-5">Statistik aktifitas perkuliahan</p>
        
        <div class="row px-md-5 px-3">
            <div class="col-3 ms-md-4"><i class="bi bi-circle-fill text-success"></i> Hadir</div>
            <div class="col-3"><i class="bi bi-circle-fill text-warning"></i> Izin</div>
            <div class="col"><i class="bi bi-circle-fill text-danger"></i> Tidak Hadir</div>
        </div>

        <div class="row justify-content-center px-md-5 my-5">
            <div class="col text-center">
                <img class="img-fluid w-75" src="{{asset('media/akademik/statistik.png')}}">
            </div>
        </div>

        <div class="row justify-content-center mb-5 px-3">
            <div class="col-md-7 mb-5">
                <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">PBO1</th>
                        <th scope="col">Matematika Diskrit</th>
                        <th scope="col">Data Mining</th>
                        <th scope="col">Mobile Programming</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><i class="bi bi-circle-fill text-success"></i> 1</td>
                        <td><i class="bi bi-circle-fill text-success"></i> 2</td>
                        <td><i class="bi bi-circle-fill text-success"></i> 3</td>
                        <td><i class="bi bi-circle-fill text-success"></i> 4</td>
                      </tr>
                      <tr>
                        <td><i class="bi bi-circle-fill text-warning"></i> 1</td>
                        <td><i class="bi bi-circle-fill text-warning"></i> 2</td>
                        <td><i class="bi bi-circle-fill text-warning"></i> 3</td>
                        <td><i class="bi bi-circle-fill text-warning"></i> 4</td>
                      </tr>
                      <tr>
                        <td><i class="bi bi-circle-fill text-danger"></i> 1</td>
                        <td><i class="bi bi-circle-fill text-danger"></i> 2</td>
                        <td><i class="bi bi-circle-fill text-danger"></i> 3</td>
                        <td><i class="bi bi-circle-fill text-danger"></i> 4</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
        
    </div>
</div>
@endsection