@extends('template1')

@section('tulisan1', 'Edit Unggas')

@section('link1')
	<a href="/unggas"> Kembali</a></a>
@endsection

@section('konten')
	@foreach($unggas as $p)
	<form action="/unggas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->unggas_id }}"> <br/>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" id="nama" required="required" value="{{ $p->unggas_nama }}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
              <input type="number" name="jumlah" class="form-control" id="jumlah" required="required" value="{{ $p->unggas_jumlah }}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
              <!-- Pilihan "Ada" -->
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tersedia" id="ada" value="1" required>
                <label class="form-check-label" for="ada">Ada</label>
              </div>
              <!-- Pilihan "Habis" -->
              <div class="form-check">
                <input class="form-check-input" type="radio" name="tersedia" id="habis" value="0" required>
                <label class="form-check-label" for="habis">Habis</label>
              </div>
            </div>
          </div>


          <div class="row mb-3">
            <div class="col-sm-12">
                <center><input type="submit" value="Simpan Data" class= "btn btn-primary"></center>
            </div>
          </div>

	</form>
	@endforeach

@endsection
