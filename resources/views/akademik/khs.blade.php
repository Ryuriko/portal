@extends('layouts.akademik')

@section('content')
<div class="row m-0 text-center px-md-5 px-5 my-5">
    <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
        <p class="h4 text">Kartu Hasil Studi</p>
    </div>
    <div class="col" style="background: #DBDBDB;">
    </div>
</div>

<div class="row m-0 justify-content-center mb-5">
    <div class="col rounded-5 py-md-3 py-2 px-5">
        <div class="row m-0 justify-content-center mt-4">
            <div class="col-11 shadow-lg rounded-5 py-4 px-5">
                <p>Kartu hasil studi saat ini</p>

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
                      <tr>
                        <td>1</td>
                        <td>2022</td>
                        <td>Ganjil</td>
                        <td>10 MK</td>
                        <td><a href="/akademik/detail/khs" class="btn btn-secondary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td>2022</td>
                        <td>Genap</td>
                        <td>8 MK</td>
                        <td><a href="/akademik/detail/khs" class="btn btn-secondary">Detail</a></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td>2023</td>
                        <td>Ganjil</td>
                        <td>12 MK</td>
                        <td><a href="/akademik/detail/khs" class="btn btn-secondary">Detail</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                </div>
        </div>
    </div>
</div>
@endsection