@extends('template')

@section('content')
	<h3>Keranjang Belanja</h3>

	<a href="/keranjang/tambah" class="btn btn-primary"> + Beli</a>

	<br/>

	<table class="table table-stripped">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga Per Item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@php
		@endphp
		@foreach($keranjangbelanja as $k)
		@php
			$Total = $k->Jumlah * $k->Harga;
		@endphp
		<tr>
			<td>{{ $b->ID }}</td>
			<td>{{ $b->KodeBarang }}</td>
			<td>{{ $b->Jumlah }}</td>
			<td>Rp {{ number_format($k->Harga, 0, ',', '.') }}</td>
			<td>Rp {{ number_format($Total, 0, ',', '.') }}</td>
			<td>
				<a href="/keranjang/delete/{{ $p->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach

	</table>
    {{
    $keranjang->links()
    }}
@endsection
