<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class peminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $peminjaman = DB::table('tb_peminjaman')->get();
        return view('status', compact('peminjaman', 'peminjaman'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        //
        $peminjaman = DB::table('tb_peminjaman')->select(
            'id_peminjaman',
            'nama_mahasiswa',
            'nrp',
            'telp_mahasiswa',
            'pembimbing',
            'id_komputer',
            'softwere',
            'status',
            'created_at',
            'tanggal_running',
            'tanggal_selesai',
            'bukti_running',
            'bukti_selesai'
        )->where('id_peminjaman', '=', $id)->get();
        // var_dump($peminjaman);
        return view('detail', compact('peminjaman', 'peminjaman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
