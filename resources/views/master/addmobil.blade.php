@extends('template.layout')
@section('content')
    <div class="container">
        <form action="{{ route('psimpan.prosmobil') }}" class="myForm" method="post">
        {{ csrf_field() }}
        <br>
        <h3>Input Data Mobil</h3> 
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Model</label>
                <input type="text" name="model" class="form-control 
                @error('model') 
                    is invalid 
                @enderror" id="exampleFormControlInput1" placeholder="Masukan Model">
                @error('model') 
                    <i style="color:red;">{{ $message }} </i>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Merek</label>
                <input type="text" name="merek" class="form-control 
                @error('merek') 
                    is invalid 
                @enderror" id="exampleFormControlInput1" placeholder="Masukan Merek">
                @error('merek') 
                    <i style="color:red;">{{ $message }} </i>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Plat Nomor</label>
                <input type="text" name="noplat" class="form-control 
                @error('noplat') 
                    is invalid 
                @enderror" id="exampleFormControlInput1" placeholder="Masukan Plat Nomor">
                @error('noplat') 
                    <i style="color:red;">{{ $message }} </i>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tarif</label>
                <input type="text" name="tarif" class="form-control 
                @error('tarif') 
                    is invalid 
                @enderror" id="exampleFormControlInput1" placeholder="Masukan Tarif">
                @error('tarif') 
                    <i style="color:red;">{{ $message }} </i>
                @enderror
            </div>
            <div class="mb-3">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
        </form>
    </div>
@endsection