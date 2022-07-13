<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perp extends Model
{
    protected $fillable = ['kode_buku', 'judul_buku', 'tahun_terbit', 'kota_terbit', 'pengarang', 'penerbit'];
    use HasFactory;
}
