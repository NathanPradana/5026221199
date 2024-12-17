@extends('template1')

@section('tulisan1', 'View Karyawan')

@section('link1')
    <a href="/karyawan">Kembali</a>
@endsection

@section('konten')
    @foreach($karyawan as $k)
    <form>
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" value="{{ $k->Nama }}" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label for="pangkat" class="col-sm-2 col-form-label">Pangkat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="pangkat" value="{{ $k->Pangkat }}" readonly>
            </div>
        </div>

        <div class="row mb-3">
            <label for="gaji" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="gaji" value="{{ $k->Gaji }}" readonly>
            </div>
        </div>
    </form>
    @endforeach
@endsection
