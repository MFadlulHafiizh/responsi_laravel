<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    function listProduk(Request $request){
        $data = Produk::query();

        if($request->search){
            $data->where('nama_produk', 'like', '%' . $request->search . '%');
        }

        $data = $data->get();

        return response()->json($data);

        return view('produk', compact('data'));
    }

    function create(){
        return view('edit_produk');
    }

    function edit($id_produk){
        $data = Produk::find($id_produk);

        return view('edit_produk', compact('data'));
    }

    function storeUpdate(Request $request){
        $data = new Produk;
        if($request->id_produk != ''){
            $data = Produk::find($request->id_produk);
        }
        $data->nama_produk = $request->nama;
        $data->jumlah = $request->jumlah_produk;
        $data->save();

        return redirect('list-produk')->with('success', 'Data berhasil disimpan');
    }

    public function delete($id_produk){
        $data = Produk::find($id_produk);
        if($data){
            $data->delete();
            return redirect()->back()->with('success', 'Data berhasil dihapus');
        }else{
            return redirect()->back()->with('error', 'Data tidak ditemukan');
        }
    }
}
