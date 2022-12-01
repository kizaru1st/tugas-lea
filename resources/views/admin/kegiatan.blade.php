@extends('layouts.app')

@section('judul', 'Kegiatan')

@section('custom-css')

<link rel="stylesheet" href="{{ asset('/assets/css/pages/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/css/pages/datatables.css') }}">

@endsection

@section('content')

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div> Kegiatan</div>
                <a href="{{ route('kegiatan.create') }}" class="btn btn-outline-primary">Tambah Data</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Bulan Kegiatan</th>
                        <th>Nama Kegiatan</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;?>
                    @foreach ($kegiatanku as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->bulan_kegiatan }}</td>
                        <td>{{ $item->nama_kegiatan }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('kegiatan.edit', ['kegiatan' => $item->id]) }}" class="me-2">
                                    <span class="btn btn-sm btn-success">Edit</span>
                                </a>
                                <form action="{{ route('kegiatan.destroy', ['kegiatan' => $item->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
            <br>

        </div>
    </div>

</section>

@endsection

@section('custom-js')

<script src="{{ asset('/assets/extensions/jquery/jquery.min.js') }}"></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
<script src="{{ asset('/assets/js/pages/datatables.js') }}"></script>

@endsection
