<?php

namespace App\Http\Controllers;

use App\Models\dataBuku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function update_view($id)
    {
        $buku = dataBuku::find($id);
        return view('buku.edit', compact('buku'));
    }


    public function store_view()
    {
        return view('buku.tambah');
    }

    public function index()
    {
        $buku = dataBuku::all();
        return view('buku', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer|min:0',

        ]);

        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buku = dataBuku::find($id);
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->stok = $request->stok;
        $buku->save();

        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = dataBuku::find($id);
        $buku->delete();
        return redirect('/buku');
    }
}
