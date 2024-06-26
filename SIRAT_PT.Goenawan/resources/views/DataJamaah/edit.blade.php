@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Data Jamaah</h2>
    <form action="{{ route('data_jamaah.update', $data_jamaah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="Tanggal_Keberangkatan">Tanggal Keberangkatan</label>
            <input type="date" class="form-control" id="Tanggal_Keberangkatan" name="Tanggal_Keberangkatan" value="{{ $data_jamaah->Tanggal_Keberangkatan }}" required>
        </div>
        <div class="form-group">
            <label for="Tanggal_Kepulangan">Tanggal Kepulangan</label>
            <input type="date" class="form-control" id="Tanggal_Kepulangan" name="Tanggal_Kepulangan" value="{{ $data_jamaah->Tanggal_Kepulangan }}" required>
        </div>
        <div class="form-group">
            <label for="Paket">Paket</label>
            <input type="text" class="form-control" id="Paket" name="Paket" value="{{ $data_jamaah->Paket }}" required>
        </div>
        <div class="form-group">
            <label for="hotel_madinah">Hotel Madinah</label>
            <input type="text" class="form-control" id="hotel_madinah" name="hotel_madinah" value="{{ $data_jamaah->hotel_madinah }}" required>
        </div>
        <div class="form-group">
            <label for="hotel_mekkah">Hotel Mekkah</label>
            <input type="text" class="form-control" id="hotel_mekkah" name="hotel_mekkah" value="{{ $data_jamaah->hotel_mekkah }}" required>
        </div>
        <div class="form-group">
            <label for="program">Program</label>
            <input type="text" class="form-control" id="program" name="program" value="{{ $data_jamaah->program }}" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ $data_jamaah->harga }}" required>
        </div>
        <div class="form-group">
            <label for="pesawat">Pesawat</label>
            <input type="text" class="form-control" id="pesawat" name="pesawat" value="{{ $data_jamaah->pesawat }}" required>
        </div>
        <div class="form-group">
            <label for="total_seat">Total Seat</label>
            <input type="number" class="form-control" id="total_seat" name="total_seat" value="{{ $data_jamaah->total_seat }}" required>
        </div>
        <div class="form-group">
            <label for="terisi">Terisi</label>
            <input type="number" class="form-control" id="terisi" name="terisi" value="{{ $data_jamaah->terisi }}" required>
        </div>
        <div class="form-group">
            <label for="sisa">Sisa</label>
            <input type="number" class="form-control" id="sisa" name="sisa" value="{{ $data_jamaah->sisa }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
