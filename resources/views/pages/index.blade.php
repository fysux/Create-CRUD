@extends('layouts.apps')
@section('content')
<div class="container py-4 mb-4 responsive">
    <div class="row">
        <a href="{{route('barang.create')}}">
            <button class="btn btn-primary">Tambah</button>
        </a>
    </div>
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="table table-responsive">
        <table class="table table-striped">
            <thead class="table table-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>{{ $data->stok }}</td>
                    <td>{{ $data->harga }}</td>
                    <td>
                        <a href="{{route('barang.edit', $data->id)}}">
                            <button class="btn btn-primary">Edit</button>
                        </a>
                        <a href="{{route('barang.show', $data->id)}}">
                            <button class="btn btn-info">Deskripsi</button>
                        </a>
                        <form action="{{ route('barang.destroy', $data->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection 