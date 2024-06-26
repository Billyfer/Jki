@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Data Jamaah</h2>
    <a href="{{ route('data_jamaah.create') }}" class="btn btn-success mb-3">Create New Data Jamaah</a>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tanggal Keberangkatan</th>
                <th>Tanggal Kepulangan</th>
                <th>Paket</th>
                <th>Hotel Madinah</th>
                <th>Hotel Mekkah</th>
                <th>Program</th>
                <th>Harga</th>
                <th>Pesawat</th>
                <th>Total Seat</th>
                <th>Terisi</th>
                <th>Sisa</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_jamaahs as $data_jamaah)
                <tr>
                    <td>{{ $data_jamaah->id }}</td>
                    <td>{{ $data_jamaah->Tanggal_Keberangkatan }}</td>
                    <td>{{ $data_jamaah->Tanggal_Kepulangan }}</td>
                    <td>{{ $data_jamaah->Paket }}</td>
                    <td>{{ $data_jamaah->hotel_madinah }}</td>
                    <td>{{ $data_jamaah->hotel_mekkah }}</td>
                    <td>{{ $data_jamaah->program }}</td>
                    <td>{{ $data_jamaah->harga }}</td>
                    <td>{{ $data_jamaah->pesawat }}</td>
                    <td>{{ $data_jamaah->total_seat }}</td>
                    <td>{{ $data_jamaah->terisi }}</td>
                    <td>{{ $data_jamaah->sisa }}</td>
                    <td>
                        <a href="{{ route('data_jamaah.edit', $data_jamaah->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('data_jamaah.destroy', $data_jamaah->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
