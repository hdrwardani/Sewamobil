<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar : Sewa Mobil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/app.css">
  </head>
  <body>
    <div class="container">
        <form action="{{ route('pdaftar.prosdaftar') }}" class="myForm" method="post">
        {{ csrf_field() }}
        <br>
        <h3>Silahkan Masukan Data Diri !</h3> 
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control 
                @error('nama') 
                    is invalid 
                @enderror" id="exampleFormControlInput1" placeholder="Masukan Nama">
                @error('nama') 
                    <i style="color:red;">{{ $message }} </i>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No Telp</label>
                <input type="text" name="notelp" class="form-control" id="exampleFormControlInput1" placeholder="Masukan No Telp">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">No SIM</label>
                <input type="text" name="nosim" class="form-control" id="exampleFormControlInput1" placeholder="Masukan SIM">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Alamat"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Password">
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" class="btn btn-primary" value="Daftar">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>