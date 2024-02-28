@extends('template.layout')
@section('content')
    <div class="container">
        <br><h3>History</h3> 
        <a href="{{ url('sewa/input') }}" class="btn btn-xs btn-primary"> Mulai Sewa </a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Mobil</th>
                    <th>Plat Nomor</th>
                    <th>Tanggal Sewa</th>
                    <th>Periode Sewa</th>
                    <th>Lama Sewa</th>
                    <th>Tarif Harian</th>
                    <th>Total Bayar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trxsewa as $row)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $row->fmobil }}</th>
                    <th>{{ $row->fnoplat }}</th>
                    <th>{{ $row->created_at }}</th>
                    <th>{{ $row->ftglawal.' s/d '.$row->ftglakhir }}</th>
                    <th>{{ $row->flama }}</th>
                    <th>{{ 'Rp. '.number_format($row->ftarif) }}</th>
                    <th>{{ 'Rp. '.number_format($row->ftotal) }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection