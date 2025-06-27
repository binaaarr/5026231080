@extends('template')

@section('content')
	<h3>Keranjang Belanja</h3>

	<a href="/keranjang/tambah" class="btn btn-primary"> + Beli</a>

    <br/>
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
                $Total = $k->jumlah * $k->harga;
            @endphp
		<tr>
			<td>{{ $k->id }}</td>
			<td>{{ $k->kodebarang }}</td>
			<td>{{ $k->jumlah }}</td>
			<td>Rp {{ number_format($k->harga, 0, ',', '.') }}</td>
			<td>Rp {{ number_format($Total, 0, ',', '.') }}</td>
			<td>
				<a href="/keranjang/hapus/{{ $k->id }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach

	</table>
    {{
    $keranjangbelanja->links()
    }}
@endsection
