@extends('template')

@section('content')
	<h3>Data Obat</h3>

	<a href="/obat/tambah" class="btn btn-primary"> + Tambah Obat Baru</a>

	<p>Cari Data Obat :</p>
	<form action="/Obat/cari" method="GET">
		<input type="text" class="form-control" name="cari" placeholder="Cari Obat .." value="{{@cari}}">
		<input type="submit" class="btn btn-in" value="CARI">
	</form>

	<br/>

	<table class="table table-stripped">
		<tr>
			<th>Merk</th>
			<th>Harga</th>
			<th>Tersedia</th>
			<th>Berat</th>
			<th>Opsi</th>
		</tr>
		@foreach($obat as $b)
		<tr>
			<td>{{ $b->merkobat }}</td>
			<td>{{ $b->hargaobat }}</td>
			<td>{{ $b->tersedia }}</td>
			<td>{{ $b->berat }}</td>
			<td>
				<a href="/obat/edit/{{ $p->ID }}" class="btn btn-success">Edit</a>
				<a href="/obat/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach

	</table>
    {{
    $obat->links()
    }}
@endsection
