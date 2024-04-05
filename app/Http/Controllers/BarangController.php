<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Barang::all();
        return view('pages.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);
        $data = [
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'stok' => $request->stok,
            'harga' => $request->harga
        ];

        $simpan = Barang::create($data);

        if ($simpan) {
            return redirect('barang')->with('success', 'Data berhasil disimpan');
        } else {
            return redirect('barang')->with('error', 'Data gagal disimpan');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Barang::findorfail($id);
        return view('pages.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Barang::findorfail($id);
        return view('pages.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);
        $data = [
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'stok' => $request->stok,
            'harga' => $request->harga
        ];

        $ubah = Barang::where('id', $id)->update($data);

        if ($ubah) {
            return redirect('barang')->with('success', 'Data berhasil disimpan');
        } else {
            return redirect('barang')->with('error', 'Data gagal disimpan');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Barang::findorfail($id);
        $data->delete();

        return redirect('barang')->with('success', 'Data Berhasil');
    }
}
