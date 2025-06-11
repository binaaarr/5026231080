@extends('template')

@section('content')

	<h3>Keranjang Belanja</h3>

	<a href="/keranjang" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjang/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Kode Barang
            </div>
            <div class="col-8">
                <input type="text" name="KodeBarang" required="required" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Jumlah
            </div>
            <div class="col-8">
                <input type="text" name="Jumlah" required="required" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Harga
            </div>
            <div class="col-8">
                <input type="text" name="Harga" required="required" class="form-control">
            </div>
        </div>

		<button type="submit"  class="btn btn-success">Tambah</button>
	</form>

</body>
</html>
