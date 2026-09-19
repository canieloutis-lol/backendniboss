<?php

namespace App\Http\Controllers;

use App\models\barang;
use Illuminate\Http\Request;

class BarangController extends Controller


{
    public function update_view($id)
    {
        $barang = Barang::find($id);
        return view('barang.edit', compact('barang'));
    }
    public function store_view()
    {
        return view('barang.tambah');
    }
    public function index()
    {
        $barang = Barang::all();

        return view('barang', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = new Barang();
        $barang->nama  = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->save();

        return redirect('/barang');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = new Barang();
        $barang->nama  = $request->nama;
        $barang->harga = $request->harga;
        $barang->stok = $request->stok;
        $barang->save();

        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('/barang');
    }
}
