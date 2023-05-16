<div class="col-11 bg-light rounded-bottom-5 py-5 px-5 my-2">
        
        <div class="fs-3 mt-md-3 fw-bold text-danger fs-5">Wisuda</div>
        <div class="fs-5">Pengumuman</div>

        <div class="row m-0 justify-content-center px-4 my-3">
          <div class="col-1 ms-md-3" style="background: #AF39A1;">
          </div>
          <div class="col text-start text-light pt-3" style="background: #E88814;">
            <p>
                Informasi kepada seluruh mahasiswa yang belum melakukan pembayaran UKT semester Genap 2023 untuk segera melakukan pembayaran dikarenakan batas pembayaran sampai tanggal 12 Januari 2023
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
                    "nama" => "Pendaftaran Wisuda",
                    "link" => "/"
        ],
                  [
                    "nama" => "X",
                    "link" => "/"
        ],
                  [
                    "nama" => "Y",
                    "link" => "/"
        ],
                  [
                    "nama" => "Z",
                    "link" => "/"
        ],
                  [
                    "nama" => "Ex",
                    "link" => "/"
        ],
                  [
                    "nama" => "Ey",
                    "link" => "/"
        ],
              ];
          @endphp

          @foreach ($akademik as $item)                  
          <div class="col-md-3 col-sm-4 col-6 col-lg-2 px-2 text-center">
            <a href="#"> <div class="m-3 border rounded-5 py-3"><i class="bi bi-browser-chrome fs-1"></i></div></a>
            <p class="">{{ $item["nama"] }}</p>
          </div>
          @endforeach
    </div>
</div>