<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use App\Models\Buku;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pinjam = Pinjam::all();
        $buku = Buku::all();
        return view('pinjam.index', compact('pinjam', 'buku'));
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
        $input = $request->all();
        Pinjam::create($input);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Pinjam::find($id);
        $buku = Buku::all();
        return view('pinjam.detail', compact('data', 'buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pinjam $pinjam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all(); // Mengambil seluruh request dari form
        $pinjam = pinjam::find($id); // Mengambil data dari ID yang akan diubah
        $pinjam->update($data); // Perintah untuk mengupdate data
        return redirect('/pinjam');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = pinjam::find($id);
        $data->delete();
        return back();
    }
}
