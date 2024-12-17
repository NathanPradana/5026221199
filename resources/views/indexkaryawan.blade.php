@extends('template1')

@section('tulisan1', 'Karyawan')

@section('konten')
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Pangkat</th>
			<th>Gaji</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
            <td>{{ $k->NIP}}</td>
			<td>{{ $k->Nama}}</td>
			<td>{{ $k->Pangkat }}</td>
			<td>{{ $k->Gaji }}</td>
			<td>
				<a href="/karyawan/edit/{{ $k->NIP }}" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="/karyawan/view/{{ $k->NIP }}" class="btn btn-danger">view</a>
            </td>
		</tr>
		@endforeach
	</table>

    <br/>
	Halaman : {{ $karyawan->currentPage() }} <br/>
	Jumlah Data : {{ $karyawan->total() }} <br/>
	Data Per Halaman : {{ $karyawan->perPage() }} <br/>


	{{ $karyawan->links() }}


@endsection
