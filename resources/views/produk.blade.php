@extends('base_layout')
@section('container')
<div class="d-flex">
    <a href="{{url('produk/create')}}" class="btn btn-primary">Tambah</a>
</div>
<table class="table table-dark table-striped-columns">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_produk }}</td>
                <td>{{ $item->jumlah }}</td>
                <td>
                    <a href="{{ url('produk/edit/' . $item->id) }}" class="btn btn-success">Edit</a>
                    <form action="{{url('produk/delete/' . $item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </thead>
</table>
@endsection