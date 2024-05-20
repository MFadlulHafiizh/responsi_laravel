@extends('base_layout')
@section('container')
    <form action="{{url('produk/update')}}" method="POST">
        @csrf
        <input type="hidden" name="id_produk" value="{{@$data->id}}">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukan nama produk" value="{{@$data->nama_produk}}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Jumlah Produk</label>
            <input type="text" class="form-control" name="jumlah_produk" placeholder="Masukan jumlah produk" value="{{@$data->jumlah}}">
        </div>
        <div class="d-flex">
            <button class="btn btn-primary ms-auto">Simpan</button>
        </div>
    </form>
@endsection