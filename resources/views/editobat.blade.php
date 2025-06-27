@extends('template')

@section('content')

<body>

	<h3>Edit Obat</h3>

	<a href="/obat" class="btn btn-info"> Kembali</a>
	<br/>
    <br/>

	@foreach($obat as $b)
	<form action="/obat/update" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <div class="col-3">
                Merk Obat
            </div>
            <div class="col-4">
                <input type="text" required="required" name="merkobat" value="{{ $b->merkobat }}"> <br/>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3">
                Harga
            </div>
            <div class="col-4">
                <input type="text" required="required" name="hargaobat" value="{{ $b->hargaobat }}"> <br/>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3">
                Ketersediaan
            </div>
            <div class="col-4">
                <input type="number" required="required" name="tersedia" value="{{ $b->tersedia }}"> <br/>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-3">
                Berat
            </div>
            <div class="col-4">
                <input required="required" name="berat" value="{{ $b->berat }}"> <br/>
            </div>
        </div>

		<input type="hidden" name="id" value="{{ $b->id }}"> <br/>

		<input type="submit" class="btn btn-success" value="Simpan obat">
	</form>
	@endforeach

@endsection
{{-- </body>
</html> --}}
