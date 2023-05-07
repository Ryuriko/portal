<hr class="p-2">
        
        <div class="fs-3 mt-md-3 fw-bold text-danger fs-5">Administrasi</div>
        <div class="fs-5">Pengumuman</div>

        <div class="row text-center px-4 my-3">
          <div class="col-1 ms-md-3" style="background: #8D8D8D;">
          </div>
          <div class="col text-center text-danger pt-3" style="background: #ECECEC;">
            <p>
                Belum ada informasi apapun terkait administrasi
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
                    "nama" => "Surat Cuti",
                    "link" => "/"
        ],
                  [
                    "nama" => "Surat",
                    "link" => "/"
        ],
                  [
                    "nama" => "Pindah Prodi",
                    "link" => "/"
        ],
                  [
                    "nama" => "Keluar Untirta",
                    "link" => "/"
        ],
                  [
                    "nama" => "Perpustakaan",
                    "link" => "/"
        ],
                  [
                    "nama" => "SPIX",
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