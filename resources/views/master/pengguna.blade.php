@extends('template.layout')
@section('content')
    <div class="container">
        <br><h3>Daftar Pengguna</h3> 
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No Telp</th>
                    <th>No SIM</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mstuser as $row)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <th>{{ $row->fnama }}</th>
                    <th>{{ $row->falamat }}</th>
                    <th>{{ $row->fnotelp }}</th>
                    <th>{{ $row->fnosim }}</th>
                    <th>{{ $row->femail }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection