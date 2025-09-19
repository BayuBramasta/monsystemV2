<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tb_peminjaman')->insert([
            'nama_mahasiswa' => "chelsea",
            'nrp' => '500987654321',
            'telp_mahasiswa' => '0897654321',
            'pembimbing' => 'Adi',
            'softwere' => "Windows 10",
            'tanggal_running' => now(),
            'tanggal_selesai' => now()
        ]);
    }
}
