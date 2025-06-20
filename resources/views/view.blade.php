@extends('template')

@section('content')

<body>
    <h2>Detail Karyawan</h2>

    <table>
        <tr><td>Kode Karyawan</td><td>{{ $mykaryawan->kodepegawai }}</td></tr>
        <tr><td>Nama</td><td>{{ $mykaryawan->namalengkap }}</td></tr>
        <tr><td>Divisi</td><td>{{ $mykaryawan->divisi }}</td></tr>
        <tr><td>Departemen</td><td>{{ $mykaryawan->departemen }}</td></tr>
    </table>
    <br>
    <a href="/eas" class="btn btn-info"> Kembali</a>
</body>

@endsection
