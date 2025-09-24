<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    /** @use HasFactory<\Database\Factories\PeminjamanFactory> */
    use HasFactory;
    protected $table = 'tb_peminjaman';
    protected $fillable = [
        'nama_mahasiswa',
        'nrp',
        'telp_mahasiswa',
        'pembimbing',
        'softwere',
        'tanggal_running'
    ];
}
