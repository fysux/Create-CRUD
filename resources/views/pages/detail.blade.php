@extends('layouts.apps')
@section('content')
<h1>Deskripsi</h1>
<h2>Barang</h2>
<h4>{{$data->nama}}</h4>
<div class="table table-responsive">
    <table class="table">
        <tr>
            <td>Barang</td>
            <td>:</td>
            <td>{{ $data->nama }}</td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>{{ $data->keterangan }}</td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td>{{ $data->stok }}</td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>{{ $data->harga }}</td>
        </tr>
        <tr>
            <td>Dibuat Pada</td>
            <td>:</td>
            <td>{{ $data->created_at }}</td>
        </tr>
        <tr>
            <td>Diubah Pada</td>
            <td>:</td>
            <td>{{ $data->updated_at }}</td>
        </tr>
    </table>
</div>
@endsection