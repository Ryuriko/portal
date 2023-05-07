<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/UserRegistration/login.css')}}">
  </head>
  <body>
    
    <div class="row justify-content-center pt-5 mt-5">
      <img src="{{asset('media/login/corak.png')}}" class="img-fluid w-50 position-absolute right-100 top-0" style="z-index: -100;">
      <div class="col-md-4 col-10 bg-light rounded-3 text-center py-auto px-auto align-self-center mt-5 p-5">
            <img src="{{asset('media/login/logo.png')}}" class="img-fluid">
            <form method="post" action="" class="mt-4">
              <div class="mb-3">
                <input type="email" class="form-control form-control-lg py-3" id="email" placeholder="email" name="email">
              </div>
              <div class="mb-3">
                <input type="password" class="form-control form-control-lg py-3" id="password" placeholder="password" name="password">
              </div>
              <button type="submit" class="btn btn-primary ms-auto d-block px-4 py-2">Masuk</button>
            </form>
        </div>
      
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>