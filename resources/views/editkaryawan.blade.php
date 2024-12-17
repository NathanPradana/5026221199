@extends('template1')

@section('tulisan1', 'Edit Karyawan')

@section('link1')
	<a href="/karyawan"> Kembali</a></a>
@endsection

@section('konten')
	@foreach($karyawan as $k)
	<form action="/karyawan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $k->NIP }}"> <br/>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" id="nama" required="required" value="{{ $k->Nama }}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="pangkat" class="col-sm-2 col-form-label">Pangkat</label>
            <div class="col-sm-10">
              <input type="text" name="pangkat" class="form-control" id="pangkat" required="required" value="{{ $k->Pangkat }}">
            </div>
          </div>

          <div class="row mb-3">
            <label for="gaji" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-10">
              <input type="number" name="gaji" class="form-control" id="gaji" required="required" value="{{ $k->Gaji }}">
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
