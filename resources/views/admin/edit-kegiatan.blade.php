@extends('layouts.app')

@section('judul', 'Data Uang Masuk')

@section('custom-css')

<link rel="stylesheet" href="{{ asset('/assets/extensions/choices.js/public/assets/styles/choices.css') }}">

@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Kegiatan</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form class="form form-horizontal" action="{{ route('kegiatan.update', $kegiatan->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Nama Kegiatan</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input value="{{ $kegiatan->nama_kegiatan }}" type="string" id="email-id" class="form-control" name="nama_kegiatan">
                        </div>
                        <div class="col-md-4">
                            <label>Deskripsi Kegiatan</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input value="{{ $kegiatan->deskripsi }}" type="string" id="email-id" class="form-control" name="deskripsi">
                        </div>
                        <div class="col-md-4">
                            <label>Bulan Kegiatan</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <fieldset class="form-group">
                                <select class="form-select" value="{{ $kegiatan->bulan_kegiatan }}" id="basicSelect" name="bulan_kegiatan">
                                    @foreach ($lists1 as $list)
                                        <option value="{{ $list }}"
                                            @if ($list == $kegiatan->bulan_kegiatan)
                                                selected
                                            @endif
                                        >{{ $list }}</option>
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('custom-js')

<script src="{{ asset('/assets/extensions/choices.js/public/assets/scripts/choices.js') }}"></script>
<script src="{{ asset('/assets/js/pages/form-element-select.js') }}"></script>

@endsection
