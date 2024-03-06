<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function mainpage(){
        return view('siswa.data-siswa');
    }

    public function addpage(){
        return view('siswa.tambah');
    }

    public function kirim(Request $request){
        $data = $request->all();
        dd($data);
    }

    
}
