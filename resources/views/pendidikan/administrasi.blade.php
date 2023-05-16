<div class="col-11 bg-light py-5 px-5 my-2">
        
        <div class="fs-3 mt-md-3 fw-bold text-danger fs-5">Administrasi</div>
        <div class="fs-5">Pengumuman</div>

        <div class="row m-0 text-center px-4 my-3">
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

        <div class="row m-0 justify-content-center justify-content-md-auto">
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
          <div class="col-md-3 col-sm-4 col-6 col-lg-2 px-2 text-center">
            <a href="#"> <div class="m-3 border rounded-5 py-3"><i class="bi bi-browser-chrome fs-1"></i></div></a>
            <p class="">{{ $item["nama"] }}</p>
          </div>
          @endforeach
      </div>
</div>