@extends('template')

@section('content')
	<h3>Data Karyawan</h3>

	<br/>
	<table class="table table-stripped">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama</th>
			<th>Divisi</th>
            <th>Departemen</th>
			<th>Opsi</th>
		</tr>
		@foreach($mykaryawan as $mk)
		<tr>
            <td>{{ $mk->kodepegawai }}</td>
			<td class="capitalize-words">{{ $mk->namalengkap }}</td>
			<td>{{ $mk->divisi }}</td>
            <td>{{ $mk->departemen }}</td>
			<td>
				<a href="/eas/edit/{{ $mk->kodepegawai }}" class="btn btn-success">Edit</a>
				<a href="/eas/view/{{ $mk->kodepegawai }}" class="btn btn-danger">View</a>
			</td>
		</tr>
		@endforeach

	</table>

@endsection
