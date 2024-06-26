@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Edit Branch</h1>
            <form action="{{ route('branches.update', $branch->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_cabang">Nama Cabang:</label>
                    <input type="text" name="kota_kabupaten" class="form-control" value="{{ $branch->nama_cabang }}" required>
                </div>
                <div class="form-group">
                    <label for="kota_kabupaten">Kota/Kabupaten:</label>
                    <input type="text" name="kota_kabupaten" class="form-control" value="{{ $branch->kota_kabupaten }}" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" class="form-control" value="{{ $branch->alamat }}" required>
                </div>
                <div class="form-group">
                    <label for="nama_pimpinan">Nama Pimpinan:</label>
                    <input type="text" name="nama_pimpinan" class="form-control" value="{{ $branch->nama_pimpinan }}" required>
                </div>
                <div class="form-group">
                    <label for="nib_cabang">NIB Cabang:</label>
                    <input type="text" name="nib_cabang" class="form-control" value="{{ $branch->nib_cabang }}" required>
                </div>
                <div class="form-group">
                    <label for="pdf_nib">PDF NIB:</label>
                    <input type="file" name="pdf_nib" class="form-control">
                    @if($branch->pdf_nib)
                        <a href="{{ asset('storage/' . $branch->pdf_nib) }}" target="_blank">Current PDF</a>
                    @endif
                </div>
                <div class="form-group">
                    <label for="pdf_akta_cabang">PDF Akta Cabang:</label>
                    <input type="file" name="pdf_akta_cabang" class="form-control">
                    @if($branch->pdf_akta_cabang)
                        <a href="{{ asset('storage/' . $branch->pdf_akta_cabang) }}" target="_blank">Current PDF</a>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection