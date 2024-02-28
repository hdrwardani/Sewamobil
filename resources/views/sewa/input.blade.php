@extends('template.layout')
@section('content')
    <div class="container">
        <form action="{{ route('psimpantrx.prossewa') }}" class="myForm" method="post"><br>
            {{ csrf_field() }}
        <h3>Input Sewa</h3> 
        <label style="color:red;">*Hanya menampilkan mobil yang tersedia</label>
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <input type="hidden" name="user" class="form-control" value="1">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Mobil</label>
                            <select name="mobil" class="form-control">
                                <option value=""> Pilih </option>
                                @foreach($mstmobil as $row)
                                <option value="{{ $row->fnoplat }}"> {{ $row->fmerek.' '.$row->fmodel.' '.$row->fnoplat.' - Rp.'.number_format($row->ftarif) }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="tglawal" class="form-label">Tanggal Awal</label>
                            <input type="date" name="tglawal" class="form-control" id="tglawal">
                        </div>
                        <div class="mb-3">
                            <label for="tglakhir" class="form-label">Tanggal Akhir</label>
                            <input type="date" name="tglakhir" class="form-control" id="tglakhir">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3">
                        <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection