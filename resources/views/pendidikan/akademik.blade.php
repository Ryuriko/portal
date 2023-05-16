        <div class="row m-0 justify-content-arround">
            <div class="col text-start">
              <div class="row m-0 text-start">
                <div class="col-4 col-sm-2 col-md-2 col-lg-2 col-xl-1 rounded-circle">
                  <img class="img-fluid" src="https://cdn.pixabay.com/photo/2023/05/02/10/35/avatar-7964945_960_720.png">
                </div>

                <div class="col lh-sm">
                  <p class="fs-5 mt-lg-4 mt-xl-2 mt-md-2">Bayu Alamsyah</p>
                  <p class="fs-6">Mahasiswa</p>
                </div>
              </div>
           </div>

            <div class="col-md-1 col-3 text-md-center text-end">
              <a href="" class="btn"><i class="bi bi-arrow-right-square-fill text-danger fs-1"></i></a>
            </div>
        </div>

        <div class="row m-0 justify-content-center mt-md-5 mt-3 mt-lg-5">
          <div class="col-md-11 col-10 text-center">
            <input type="text" class="form-control border border-dark" placeholder="Apa yang kamu cari?">
          </div>
        </div>
        
        <div class="fs-3 mt-md-3 fw-bold text-danger fs-5">Akademik</div>
        <div class="fs-5">Pengumuman</div>

        <div class="row m-0 text-center px-4 my-3">
          <div class="col-1 ms-md-3" style="background: #AF39A1;">
          </div>
          <div class="col text-start text-light pt-3" style="background: #E88814;">
            <p>
              Informasi kepada seluruh mahasiswa yang belum mengisi KRS semester Ganjil, harap segera mengisi KRS dikarenakan batas pengisian KRS sampai tanggal 12 Januari 2023
            </p>
          </div>
        </div>

        <div class="fs-5">
          <p>Menu Pilihan</p>
        </div>

        <div class="row m-0 justify-content-center justify-content-md-start">
          @php
              $akademik = [
                  [
                    "nama" => "Mata Kuliah",
                    "link" => "/"
        ],
                  [
                    "nama" => "KRS",
                    "link" => "/"
        ],
                  [
                    "nama" => "Bimbingan Akademik",
                    "link" => "/"
        ],
                  [
                    "nama" => "KHS",
                    "link" => "/"
        ],
                  [
                    "nama" => "Transkip Nilai",
                    "link" => "/"
        ],
                  [
                    "nama" => "X",
                    "link" => "/"
        ],
                  [
                    "nama" => "Y",
                    "link" => "/"
                  ]
              ];
          @endphp

          @foreach ($akademik as $item)                  
          <div class="col-md-4 col-sm-3 col-3 col-lg-2 px-md-5 px-sm-1 px-0 px-lg-2 me-sm-0 me-1 text-center">
            <a href="#"> <div  class="p-3 border rounded-5"><i class="bi bi-spotify fs-1"></i></div></a>
            <p class="">{{ $item["nama"] }}</p>
          </div>
          @endforeach

      </div>