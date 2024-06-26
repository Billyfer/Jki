@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tambah Cabang</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('branches.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama_cabang">Nama Cabang:</label>
                    <input type="text" name="nama_cabang" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="kota_kabupaten">Kota/Kabupaten:</label>
                    <input type="text" name="kota_kabupaten" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <input type="text" name="alamat" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nama_pimpinan">Nama Pimpinan:</label>
                    <input type="text" name="nama_pimpinan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="nib_cabang">NIB Cabang:</label>
                    <input type="text" name="nib_cabang" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="pdf_nib">PDF NIB:</label>
                    <input type="file" name="pdf_nib" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="pdf_akta_cabang">PDF Akta Cabang:</label>
                    <input type="file" name="pdf_akta_cabang" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection