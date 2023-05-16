<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  </head>
  <body>
    {{-- Navbar --}}
    @include('pendidikan.navbar')

    {{-- Body --}}

    <div class="row m-0 justify-content-center">
        <div class="col-11 bg-light rounded-5 sec-1 py-5 px-5">
            @include('pendidikan.akademik')
            @include('pendidikan.administrasi')
            @include('pendidikan.keuangan')
            @include('pendidikan.kemahasiswaan')
            @include('pendidikan.tugas')
            @include('pendidikan.wisuda')
        </div>
    </div>

    {{-- Footer --}}
    <div class="footer">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>