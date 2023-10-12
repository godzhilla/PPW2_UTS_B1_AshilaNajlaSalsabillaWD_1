@extends('daftar_pemain')

@section('title', 'Daftar Pemain')

@section('header', 'Daftar Pemain TRPL FC')

@section('subheader', 'Bulaksumur, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Pemain</th>
            <th scope="col">No Punggung</th>
            <th scope="col">Posisi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_pemain as $pemain)
        <tr>
            <th scope="row">{{++$no}}</th>
            <td>{{$pemain->nama_pemain}}</td>
            <td>{{$pemain->no_punggung}}</td>
            <td>{{$pemain->posisi}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
