@extends('layouts.app')

@section('judul', 'Data Uang Keluar')

@section('custom-css')

<link rel="stylesheet" href="{{ asset('/assets/extensions/choices.js/public/assets/styles/choices.css') }}">

@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Data</h4>
    </div>
    <div class="card-content">
        <div class="card-body">
            <form class="form form-horizontal" action="{{ route('data-keluar.update', $data_keluar->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label>Jumlah</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <input value="{{ $data_keluar->jumlah }}" type="string" id="email-id" class="form-control" name="jumlah">
                        </div>
                        <div class="col-md-4">
                            <label>Bulan Donasi</label>
                        </div>
                        <div class="col-md-8 form-group">
                            <fieldset class="form-group">
                                <select class="form-select" value="{{ $data_keluar->bulan }}" id="basicSelect" name="bulan">
                                    @foreach ($lists as $list)
                                        <option value="{{ $list }}"
                                            @if ($list == $data_keluar->bulan)
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
