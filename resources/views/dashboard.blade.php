@extends('layouts.app')

@section('judul', ' Dashboard')

@section('content')
<section class="section">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Selamat Datang, {{ Auth::user()->username }}!</h4>
        </div>
    </div>
</section>
@endsection

