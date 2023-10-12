@extends('layouts.main')
@section('title')
    UTS Fadhil
@endsection
@section('body')
    @include('layouts.navbar')
    <h1>Data All</h1>
    <table border="1px" class="table table-bordered">
        <thead>
            <th>ID</th>
			<th>Nama Pemain</th>
			<th>No punggung</th>
			<th>Posisi</th>
			<th>Aksi</th>
        </thead>
        <tbody>
            @foreach ($dataPemain as $item)
                <tr>
                    <td class="text-center">{{ $item->id }}</td>
                    <td>{{ $item->nama_pemain }}</td>
                    <td>{{ $item->no_punggung }}</td>
                    <td>{{ $item->posisi }}</td>
                    <td>
                        <a href="">Edit</a><br>
                        <a href="">Delete</a><br>
                        <a href="">Show</a>
                    </td>
                </tr>
		    @endforeach
        </tbody>
    </table>
@endsection