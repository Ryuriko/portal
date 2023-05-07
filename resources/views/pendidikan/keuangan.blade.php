<hr class="p-2">

        <div class="fs-3 mt-md-3 fw-bold text-danger fs-5">Keuangan</div>
        <div class="fs-5">Pengumuman</div>

        <div class="row text-center px-4 my-3">
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

        <div class="row">
          @php
              $akademik = [
                  [
                    "nama" => "Pembayaran UKT/Cuti",
                    "link" => "/"
        ],
                  [
                    "nama" => "Penangguhan UKT",
                    "link" => "/"
        ],
                  [
                    "nama" => "Penururan UKT",
                    "link" => "/"
        ],
                  [
                    "nama" => "Surat Bebas Tunggakan",
                    "link" => "/"
        ],
                  [
                    "nama" => "Riwayat Pembayaran",
                    "link" => "/"
        ],
              ];
          @endphp

          @foreach ($akademik as $item)                  
          <div class="col-md-2 col-4 px-md-5 text-center">
            <a href="#"> <div  class="p-3 border rounded-5"><i class="bi bi-browser-chrome fs-1"></i></div></a>
            <p class="">{{ $item["nama"] }}</p>
          </div>
          @endforeach
      </div>