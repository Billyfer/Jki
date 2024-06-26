@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Data Jamaah</h2>
    <form action="{{ route('data_jamaah.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="Tanggal_Keberangkatan">Tanggal Keberangkatan</label>
            <input type="date" class="form-control" id="Tanggal_Keberangkatan" name="Tanggal_Keberangkatan" required>
        </div>
        <div class="form-group">
            <label for="Tanggal_Kepulangan">Tanggal Kepulangan</label>
            <input type="date" class="form-control" id="Tanggal_Kepulangan" name="Tanggal_Kepulangan" required>
        </div>
        <div class="form-group">
            <label for="Paket">Paket</label>
            <input type="text" class="form-control" id="Paket" name="Paket" required>
        </div>
        <div class="form-group">
            <label for="hotel_madinah">Hotel Madinah</label>
            <input type="text" class="form-control" id="hotel_madinah" name="hotel_madinah" required>
        </div>
        <div class="form-group">
            <label for="hotel_mekkah">Hotel Mekkah</label>
            <input type="text" class="form-control" id="hotel_mekkah" name="hotel_mekkah" required>
        </div>
        <div class="form-group">
            <label for="program">Program</label>
            <input type="text" class="form-control" id="program" name="program" required>
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" required>
        </div>
        <div class="form-group">
            <label for="pesawat">Pesawat</label>
            <input type="text" class="form-control" id="pesawat" name="pesawat" required>
        </div>
        <div class="form-group">
            <label for="total_seat">Total Seat</label>
            <input type="number" class="form-control" id="total_seat" name="total_seat" required>
        </div>
        <div class="form-group">
            <label for="terisi">Terisi</label>
            <input type="number" class="form-control" id="terisi" name="terisi" required>
        </div>
        <div class="form-group">
            <label for="sisa">Sisa</label>
            <input type="number" class="form-control" id="sisa" name="sisa" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
