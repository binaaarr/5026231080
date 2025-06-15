@extends('template')

@section('content')
	<h3>Data Karyawan</h3>

	<a href="/karyawan" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <div class="col-3">
                Kode Karyawan
            </div>
            <div class="col-8">
		        <input type="text" name="kodekaryawan" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Nama
            </div>
            <div class="col-8">
		        <input type="text" name="nama" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Divisi
            </div>
            <div class="col-8">
		        <input type="text" name="divisi" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-3">
                Departemen
            </div>
            <div class="col-8">
		        <input type="text" name="departemen" required="required" class="form-control">
            </div>
        </div>
		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>

@endsection
