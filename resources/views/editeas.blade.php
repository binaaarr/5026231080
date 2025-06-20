@extends('template')

@section('content')

<body>

    <a href="/eas" class="btn btn-info" > Kembali</a>
	<h2>Edit Karyawan</h3>

	@foreach($mykaryawan as $mk)
	<form action="/eas/update" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <div class="col-3">
                Kode Pegawai
            </div>
            <div class="col-4">
                <input type="text" name="kodepegawai" value="{{ $mk->kodepegawai }}"> <br/>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3">
                Nama Lengkap
            </div>
            <div class="col-4">
                <input type="text" required="required" name="nama" value="{{ $mk->namalengkap }}"> <br/>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3">
                Divisi
            </div>
            <div class="col-4">
                <input type="text" required="required" name="divisi" value="{{ $mk->divisi }}"> <br/>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3">
                Departemen
            </div>
            <div class="col-4">
                <input type="text" required="required" name="departemen" value="{{ $mk->departemen}}"> <br/>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success" >
	</form>
	@endforeach


</body>
</html>

@endsection
