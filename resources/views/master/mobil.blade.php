@extends('template.layout')
@section('content')
    <div class="container">
        <br><h3>Daftar Mobil</h3> 
        <a href="{{ url('master/addmobil') }}" class="btn btn-xs btn-primary"> Tambah </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Merek</th>
                    <th>Model</th>
                    <th>No Plat</th>
                    <th>No Tarif</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mstmobil as $row)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $row->fmodel }}</th>
                    <th>{{ $row->fmerek }}</th>
                    <th>{{ $row->fnoplat }}</th>
                    <th>{{ 'Rp. '.number_format($row->ftarif) }}</th>
                    <th>{{ $row->fstatus }}</th>
                    <th><a href="{{ url('master/editmobil/'.$row->fidmobil) }}" class="btn btn-warning"> Edit </a></th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection