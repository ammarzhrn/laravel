<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    // Perintah dibawah digunakan ketika nama table migration tidak memiliki s dibelakang
    // Contoh : Books, Users (S Dibelakang)
    protected $table = 'buku';

    // jika jumlahnya sedikit, dapat menggunakan $fillable
    // protected $fillable = ['judul', 'pengarang', 'penerbit'];

    // jika jumlahnya banyak, bisa menggunakan perintah :
    protected $guarded = [];
}
