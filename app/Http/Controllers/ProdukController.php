<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }
    public function create()
    {
        return view('produk.create');
    }
    public function store(request $request)
    {
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'stok' => $request->stok,
        ]);
        return redirect('produk');
    }
    public function destroy($id)
    {
        Produk::destroy($id);
        return redirect('/produk');
    }
    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('produk/edit', compact('produk'));
    }
    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->nama_produk =$request->nama_produk;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->save();
        return redirect('produk');
    }
}