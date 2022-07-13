<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $fillable = ['nama_peminjam', 'kelas', 'jenis_kelamin', 'nomor_tlpn', 'kode_buku', 'judul_buku', 'tanggal_meminjam', 'tanggal_pengembalian'];
    use HasFactory;
}
