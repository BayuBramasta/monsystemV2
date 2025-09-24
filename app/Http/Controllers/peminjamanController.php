<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\peminjaman;
use Faker\Provider\ar_EG\Person;

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
    public function create(): View
    {
        //
        return view('reservasi');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'nama' => 'required',
            'nrp' => 'required',
            'telp' => 'required',
            'pembimbing' => 'required',
            'softwere' => 'required',
            'tanggal' => 'required',
        ]);
        DB::insert(
            'insert into tb_peminjaman (nama_mahasiswa, nrp, telp_mahasiswa,pembimbing,softwere,tanggal_running) values (?, ?, ?, ?, ?, ?)',
            [$data['nama'], $data['nrp'], $data['telp'], $data['pembimbing'], $data['softwere'], $data['tanggal']]
        );
        return view('reservasi');
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
