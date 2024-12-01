@extends('template1')

@section('tulisan1', 'Data Unggas')

@section('link1')
	<a href="/unggas"> Kembali</a></a>
@endsection


@section('konten')
	<form action="/unggas/store" method="post">
		{{ csrf_field() }}
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" id="nama" required="required">
            </div>
          </div>

          <div class="row mb-3">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
              <input type="number" name="jumlah" class="form-control" id="jumlah" required="required">
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
@endsection

