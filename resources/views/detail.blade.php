@extends('index')
@section('title', 'status')
@section('content')
<!-- Post Content-->
<article class="mb-4 mt-5">
  <div class="container px-4 px-lg-5">
    <div class="row">
      <p class="fs-1 mt-5">Detail Reservasi</p>
      <div class="col-6 col-md-6">
        <p>Id Reservasi</p>
        <p>Nama Mahasiswa</p>
        <p>NRP</p>
        <p>No. Telpon Mahasiswa</p>
        <p>Nama Pembimbing</p>
        <p>Id Komputer</p>
        <p>Software</p>
        <p>Status</p>
        <p>Tanggal Running</p>
        <p>Tanggal Selesai</p>
        <p>Tanggal Daftar</p>
        <p>Bukti Selesai</p>
      </div>
      <div class="col-6 col-md-6">
        @foreach($peminjaman as $detail)
        <p>{{ $detail->id_peminjaman }}</p>
        <p>{{ $detail->nama_mahasiswa }}</p>
        <p>{{ $detail->nrp }}</p>
        <p>{{ $detail->telp_mahasiswa }}</p>
        <p>{{ $detail->pembimbing }}</p>
        <p>{{ $detail->id_komputer }}</p>
        <p>{{ $detail->softwere }}</p>
        <p class="col-sm-4 text-white text-center p-2 {{ $detail->status=='menunggu'?'bg-warning':'bg-success' }}">{{ $detail->status }}</p>
        <p>{{ $detail->created_at }}</p>
        <p>{{ $detail->tanggal_running }}</p>
        <p>{{ $detail->tanggal_selesai }}</p>
        <p>{{ $detail->bukti_running }}</p>
        <p>{{ $detail->bukti_selesai }}</p>
        @endforeach
      </div>
    </div>
  </div>
</article>
@endsection