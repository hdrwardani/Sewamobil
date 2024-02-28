<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masuk : Sewa Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/app.css">
  </head>
  <body>
    <div class="container text-center">
        <h1>Silahkan Masuk !</h1> 
        <form class="myForm" action="{{route('pmasuk.prosmasuk')}}" method="post">
          @csrf
          <div class="form-group">
            <input class="form-control input-lg" type="email" name="email" id="email" placeholder="email" />
          </div>
          <div class="form-group">
            <input class="form-control input-lg" type="password" name="password" placeholder="password" />
          </div>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-success btn-lg" value="Masuk" />
          </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>