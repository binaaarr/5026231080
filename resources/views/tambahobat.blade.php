@extends('template')

@section('content')

	<h3>Data Obat</h3>

	<a href="/obat" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/obat/store" method="post">
		{{ csrf_field() }}
        <div class="row">
            <div class="col-3">
                Merk
            </div>
            <div class="col-8">
                <input type="text" name="merkobat" required="required" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Harga
            </div>
            <div class="col-8">
                <input type="text" name="hargaobat" required="required" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Tersedia
            </div>
            <div class="col-8">
                <input type="text" name="tersedia" required="required" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                Berat
            </div>
            <div class="col-8">
                <textarea type="text" name="berat" required="required" class="form-control">
                </textarea>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>



</body>
</html>
