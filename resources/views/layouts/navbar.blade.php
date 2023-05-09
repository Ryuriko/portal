<div class="py-5" style="background-image: url('{{asset('media/LandingPage/bg-atas.png')}}'); background-size: cover; background-position: center; background-repeat: no-repeat;">
  <div class="row justify-content-around">
    <div class="col text-start ps-5">
      <img class="img-fluid mt-md-0 mt-2" src="{{asset('media/LandingPage/logo.png')}}">
    </div>

    <div class="col-md-7 col-6 me-md-0 me-3 text-end">

      <nav class="navbar navbar-dark navbar-expand-lg text-light">
        <div class="container-fluid">
          <button class="navbar-toggler border-light ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse fs-5" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item rounded-3 px-2" style="{{Request::is('profile*') ? 'background: rgba(255, 255, 255, 0.33);' : ''}}">
                <a class="nav-link text-light" aria-current="page" href="/profile"><i class="bi bi-person-fill"></i> Profil</a>
              </li>
              <li class="nav-item dropdown rounded-3 px-2" style="{{Request::is('akademik*') ? 'background: rgba(255, 255, 255, 0.33);' : ''}}">
                <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-mortarboard-fill"></i> Akademik
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/akademik/ifm">Informasi Mata Kuliah</a></li>
                  <li><a class="dropdown-item" href="/akademik">KRS</a></li>
                  <li><a class="dropdown-item" href="/akademik/perkuliahan">Perkuliahan</a></li>
                  <li><a class="dropdown-item" href="/akademik/khs">KHS</a></li>
                  <li><a class="dropdown-item" href="/akademik/transkrip">Transkrip</a></li>
                  {{-- <li><hr class="dropdown-divider"></li> --}}
                </ul>
              </li>
              <li class="nav-item dropdown rounded-3 px-2" style="{{Request::is('administrasi*') ? 'background: rgba(255, 255, 255, 0.33);' : ''}}">
                <a class="nav-link text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-file-earmark-post"></i> Administrasi
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/administrasi">Pengajuan Cuti</a></li>
                  <li><a class="dropdown-item" href="/administrasi/wisuda">Wisuda</a></li>
                  <li><a class="dropdown-item" href="/administrasi/magang">Magang</a></li>
                  <li><a class="dropdown-item" href="/administrasi/PindahProdi">Pindah Prodi</a></li>
                  <li><a class="dropdown-item" href="/administrasi/perpustakaan">Perpsustakaan</a></li>
                  <li><a class="dropdown-item" href="/administrasi/KeluarUntirta">Keluar Untirta</a></li>
                </ul>
              </li>
              <li class="nav-item rounded-3 px-2" style="{{Request::is('kinerja') ? 'background: rgba(255, 255, 255, 0.33);' : ''}}">
                <a class="nav-link text-light" href="#"><i class="bi bi-briefcase-fill"></i> Kinerja</a>
              </li>
              <li class="nav-item rounded-3 px-2" style="{{Request::is('keuangan') ? 'background: rgba(255, 255, 255, 0.33);' : ''}}">
                <a class="nav-link text-light" href="#"><i class="bi bi-database-fill"></i> Keuangan</a>
              </li>
            </ul>
            <hr class="bg-light">
          </div>
        </div>
      </nav>
    </div>
  </div>
  <div class="row justify-content-center pb-5 pt-3 mt-5">
    <div class="col-md-4 col-10 text-center mb-5">
      @if (Request::is('/'))
        <h3 class="h2 text-light mb-5">Selamat Datang di Portal Mahasiswa</h3>          
      @endif
    </div>
  </div>
  </div>
</div>