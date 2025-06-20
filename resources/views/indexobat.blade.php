@extends('template')

@section('content')
	<h3>Data Obat</h3>

	<a href="/obat/tambah" class="btn btn-primary"> + Tambah Obat Baru</a>

	<p>Cari Data Obat :</p>
	<form action="obat/cari" method="GET">
        <div class="input-group mb-3">
            <input type="text" class="form-control " name="cariObat" placeholder="Cari Obat...">
            <div class="input-group-append">
                <button class="btn btn-info" type="submit">Cari</button>
            </div>
        </div>
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
				<a href="/obat/edit/{{ $b->id }}" class="btn btn-success">Edit</a>
				<a href="/obat/hapus/{{ $b->id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach

	</table>
    {{
    $obat->links()
    }}
@endsection
