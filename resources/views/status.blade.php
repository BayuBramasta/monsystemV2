@extends('index')
@section('title', 'status')
@section('content')
<!-- Main Content-->
<main class="container-fluid mt-5 mb-4">
    <div class="container-fluid px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 mt-5">
                <table id="example" class="table table-striped nowrap">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>NRP/NIP</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peminjaman as $data)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $data -> nama_mahasiswa }}</td>
                            <td>{{ $data -> nrp }}</td>
                            <td>{{ $data -> status }}</td>
                            <td><a href="{{ route('detail.show',['id'=>$data->id_peminjaman]) }}" class="btn btn-sm btn-primary">Detail</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection