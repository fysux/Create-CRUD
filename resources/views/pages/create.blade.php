@extends('layouts.apps')
@section('content')
<div class="container bg-secondary rounded">
    <form action="{{ route('barang.store') }}" method="post">
        @csrf
        <div class="container">
            <div class="mb-3">
                <label for="nama" class="form-label">Masukkan Nama Barang</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Masukkan Deskripsi Barang</label>
                <input type="text" class="form-control" id="keterangan" name="keterangan">
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Masukkan Jumlah Barang</label>
                <input type="number" class="form-control" id="jumlah" name="stok">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Masukkan Harga Barang</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>
</div>
@endsection