<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = new \App\Models\Buku;
        $data->judul = 'NeyMar';
        $data->pengarang = 'Ammar Liye';
        $data->penerbit = 'Yudhistilis Publisher';
        $data->save();
    }
}
