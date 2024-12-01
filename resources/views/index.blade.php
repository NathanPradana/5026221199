@extends('template1')

@section('tulisan1', 'Data Unggas')

@section('link1')
	<a href="/unggas/tambah" class="btn btn-primary"> + Tambah Unggas Baru</a>
@endsection

@section('konten')

	<form action="/unggas/cari" method="GET">
        <div class="row mb-3">
            <label for="cari" class="col-sm-2 col-form-label">Cari nama Unggas :</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari unggas ..." value="{{ old('cari') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI" class="btn btn-success ">
              </div>

              <div>
              </div>


	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Tersedia</th>
            <th>Edit/Hapus</th>
		</tr>
		@foreach($unggas as $p)
		<tr>
			<td>{{ $p->unggas_nama }}</td>
			<td>{{ $p->unggas_jumlah }}</td>
			<td>{{ $p->unggas_tersedia }}</td>
			<td>
				<a href="/unggas/edit/{{ $p->unggas_id }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
				|
				<a href="/unggas/hapus/{{ $p->unggas_id }}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>

    <br/>
	Halaman : {{ $unggas->currentPage() }} <br/>
	Jumlah Data : {{ $unggas->total() }} <br/>
	Data Per Halaman : {{ $unggas->perPage() }} <br/>


	{{ $unggas->links() }}


@endsection
