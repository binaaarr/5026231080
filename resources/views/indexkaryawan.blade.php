@extends('template')

@section('content')
<h3>Data Karyawan</h3>
<br/>
	<br/>
	<table class="table table-striped">
		<tr>
            <th>Kode Karyawan</th>
			<th>Nama</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Hapus</th>
		</tr>
		@foreach($karyawan as $r)
		<tr>
            <td class="text-uppercase">{{ $r->kodepegawai }}</td>
			<td class="text-uppercase">{{ $r->namalengkap }}</td>
			<td>{{ $r->divisi }}</td>
			<td class="text-lowercase">{{ $r->departemen }}</td>
			<td>
				<a href="/karyawan/hapus/{{ $r->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <a href="/karyawan/tambah" class="btn btn-primary mb-5"> + Tambah Karyawan Baru</a>


@endsection
