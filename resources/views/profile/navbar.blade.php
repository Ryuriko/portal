<div class="row m-0 pt-3 border-bottom border-danger border-5 bg-silver">
    <a href="/profile" class="col-md-2 col-6 p-md-3 p-2 nav-link fw-bold rounded-top-4 text-center me-1 {{Request::is('profile') ? 'bg-orange text-light' : 'bg-light text-orange'}}">Biodata Mahasiswa</a>
    <a href="/profile/keluarga" class="col-md-2 col-5 p-md-3 p-2 nav-link fw-bold rounded-top-4 text-center me-1 {{Request::is('profile/keluarga') ? 'bg-orange text-light' : 'bg-light text-orange'}}">Keluarga</a>
    <a href="/profile/pendidikan" class="col-md-2 col-6 p-md-3 p-2 nav-link fw-bold rounded-top-4 text-center me-1 mt-2 mt-md-0 {{Request::is('profile/pendidikan') ? 'bg-orange text-light' : 'bg-light text-orange'}}">Pendidikan</a>
    <a href="/profile/dokumen" class="col-md-2 col-5 p-md-3 p-2 nav-link fw-bold rounded-top-4 text-center mt-2 mt-md-0 {{Request::is('profile/dokumen') ? 'bg-orange text-light' : 'bg-light text-orange'}}">Dokumen</a>
</div>