<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $barangs = Barang::all(); //Fungsi untuk mengambil seluruh data pada tabel barangs

        return view('barangs.index', compact('barangs')); //Redirect ke halaman barangs/index.blade.php dengan membawa data barangs tadi
    }

    public function create()
    {
        return view('barangs.create'); //Redirect ke halaman barangs/create.blade.php
    }

    public function store(Request $request)
    {
        $request->validate([
            'katagori_barang' => 'required', //nama form "katagori_barang" harus diisi (required)
            'nama_barang' => 'required', //nama form "nama_barang" harus diisi (required)
            'jumlah_stok' => 'required', //nama form "jumlah_stok" harus diisi (required)
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        Barang::create($request->all()); //Fungsi untuk menyimpan data inputan kita

        return redirect()->route('barangs.index')
            ->with('success', 'Data Berhasil Ditambah.'); //Redirect ke halaman barangs/index.blade.php dengan pesan success
    }

    public function show(Barang $barang)
    {
        return view('barangs.detail', compact('barang')); //Redirect ke halaman barangs/detail.blade.php dengan membawa data barang sesuai ID yang dipilih
    }

    public function edit(barang $barang)
    {
        return view('barangs.edit', compact('barang')); //Redirect ke halaman barangs/edit.blade.php dengan membawa data barang sesuai ID yang dipilih
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'katagori_barang' => 'required', //nama form "katagori_barang" harus diisi (required)
            'nama_barang' => 'required', //nama form "nama_barang" harus diisi (required)
            'jumlah_stok' => 'required', //nama form "jumlah_stok" harus diisi (required)
        ]); //Memvalidasi inputan yang kita kirim apakah sudah benar

        $barang->update($request->all()); //Fungsi untuk mengupdate data inputan kita

        return redirect()->route('barangs.index')
            ->with('success', 'Data Berhasil Diupdate'); //Redirect ke halaman barangs/index.blade.php dengan pesan success
    }

    public function destroy(Barang $barang)
    {
        $barang->delete(); //Fungsi untuk menghapus data sesuai dengan ID yang dipilih

        return redirect()->route('barangs.index')
            ->with('success', 'Data Berhasil Dihapus'); //Redirect ke halaman barangs/index.blade.php dengan pesan success
    }
}