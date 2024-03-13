<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = 'Ini Data Buku!';

        // Mengambil data dari table buku yg ditampung dimodel buku;
        $buku = Buku::all();

        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Untuk Menampilkan Halaman Untuk Menambah Item (Jika Ada)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Digunakan Untuk Mengolah Data Yang Akan Dikirim
        $input = $request->all();
        Buku::create($input);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Untuk memanggil halaman Detail
        $data = Buku::find($id);
        return view('buku.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        // Untuk Memanggil halaman edit

        return "Halaman Edit";

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all(); // Mengambil seluruh request dari form
        $buku = Buku::find($id); // Mengambil data dari ID yang akan diubah
        $buku->update($data); // Perintah untuk mengupdate data
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Buku::find($id);
        $data->delete();
        return back();
    }
}
