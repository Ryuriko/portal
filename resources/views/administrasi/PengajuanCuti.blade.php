@extends('layouts.administrasi')

@section('content')
<div class="row m-0 text-center px-md-5 px-5 my-5">
    <div class="col-md-4 col-6 text-start bg-orange text-light ps-md-5 pt-2">
        <p class="h4 text">Pengajuan Cuti</p>
    </div>
    <div class="col" style="background: #DBDBDB;">
    </div>
</div>

<div class="row m-0 px-5">
    <div class="col-8">
      <label for="SemesterCuti" class="form-label">Semester Cuti</label>
      <input type="text" class="form-control" id="SemesterCuti" name="SemesterCuti" placeholder="-" disabled>
    </div>
    <div class="col-8 my-4">
      <label for="TahunAkademik" class="form-label">Tahun Akademik</label>
      <input type="text" class="form-control" id="TahunAkademik" name="TahunAkademik" placeholder="-" disabled>
    </div>
    <div class="col-8">
      <label for="AlasanCuti" class="form-label">Alasan Cuti</label>
      <input type="text" class="form-control" id="AlasanCuti" name="AlasanCuti" placeholder="-" disabled>
    </div>
    <div class="col-5 my-4">
      <button class="btn btn-warning bg-orange px-md-5 px-3 text-light fw-bold">Simpan</button>
    </div>
</div>

<div class="row m-0 justify-content-center mt-4">
    <div class="col-11 shadow-lg rounded-5 py-4 px-5">
        <p>Proses Verifikasi Cuti</p>

        <div class="table-responsive">
        <table class="table table-striped text-center">
            <thead class="bg-orange">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tahun</th>
                <th scope="col">Semester Cuti</th>
                <th scope="col">Verifikasi</th>
                <th scope="col">Validasi</th>
                <th scope="col">Batal</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody class="bg-silver">
              <tr>
                <td>1</td>
                <td>2022</td>
                <td>1000</td>
                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                <td>-</td>
                <td>
                    <a href="#" class="btn btn-primary rounded-circle"><i class="bi bi-pencil-square text-light"></i></a>
                    <a href="#" class="btn bg-purple rounded-circle my-md-0 my-2"><i class="bi bi-printer-fill text-light"></i></a>
                    <a href="#" class="btn btn-danger rounded-circle"><i class="bi bi-x-circle text-light"></i></a>
                </td>
              </tr>
              <tr>
                <td>1</td>
                <td>2022</td>
                <td>1000</td>
                <td><i class="bi bi-arrow-counterclockwise"></i></td>
                <td><i class="bi bi-arrow-counterclockwise"></i></td>
                <td>-</td>
                <td>
                    <a href="#" class="btn btn-primary rounded-circle"><i class="bi bi-pencil-square text-light"></i></a>
                    <a href="#" class="btn btn-secondary rounded-circle my-md-0 my-2"><i class="bi bi-printer-fill text-light"></i></a>
                    <a href="#" class="btn btn-danger rounded-circle"><i class="bi bi-x-circle text-light"></i></a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
</div>

<div class="row m-0 justify-content-center mt-4 mb-5">
    <div class="col-11 shadow-lg rounded-5 py-4 px-5">
        <p>Cuti yang sedang berlangsung</p>

        <div class="table-responsive">
            <table class="table table-striped text-center">
            <thead class="bg-orange">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Tahun</th>
                <th scope="col">Semester Cuti</th>
                <th scope="col">Verifikasi</th>
                <th scope="col">Validasi</th>
                <th scope="col">Batal</th>
                <th scope="col">Keterangan</th>
              </tr>
            </thead>
            <tbody class="bg-silver">
              <tr>
                <td>1</td>
                <td>2022</td>
                <td>1000</td>
                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                <td><i class="bi bi-check-circle-fill text-success"></i></td>
                <td>-</td>
                <td>-</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row m-0 my-md-0 my-4">
            <div class="text-end">
                <a href="#" class="btn btn-success fw-bold px-md-4">Aktifkan Kembali</a>
                <a href="#" class="btn btn-secondary fw-bold px-md-4">Unduh Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection