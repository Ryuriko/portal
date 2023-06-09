<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal SIAKAD</title>
    <link rel="shortcut icon" href="https://untirta.ac.id/wp-content/uploads/2020/01/Untirta-Logo-Transparan.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('dropify/dist/css/dropify.css')}}">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  </head>
  <body>
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Navbar Profile --}}
    @include('profile.navbar')

    {{-- Body --}}
    @yield('content')
    
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="{{asset('dropify/dist/js/dropify.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        $('.dropify').dropify({
            messages: {
                'default': 'Pilih file dari komputer',
                'replace': 'Klik untuk mengganti file',
                'remove':  'Remove',
                'error':   'Ooops, something wrong happended.'
            }
        });
      })
    </script>
  </body>
</html>