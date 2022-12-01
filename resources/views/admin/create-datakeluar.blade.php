@extends('layouts.app')

@section('judul', 'Data Uang Masuk')

@section('custom-css')

<link rel="stylesheet" href="{{ asset('/assets/extensions/choices.js/public/assets/styles/choices.css') }}">

@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Input Data</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form class="form form-horizontal" action="{{ route('data-keluar.store') }}" method="post">
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Jumlah</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input type="string" id="email-id" class="form-control" name="jumlah">
                        </div>
                        <div class="col-md-4">
                            <label>Bulan Donasi</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <fieldset class="form-group">
                                <select class="form-select" id="basicSelect" name="bulan">
                                    <option value="Januari">Januari</option>
                                    <option value="Februari">Februari</option>
                                    <option value="Maret">Maret</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="Juni">Juni</option>
                                    <option value="Juli">Juli</option>
                                    <option value="Agustus">Agustus</option>
                                    <option value="September">September</option>
                                    <option value="Oktober">Oktober</option>
                                    <option value="November">November</option>
                                    <option value="Desember">Desember</option>
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
