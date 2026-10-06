@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="card">
        <h1>{{ $kampus['nama'] }}</h1>
        <p><em>{{ $kampus['tagline'] }}</em></p>
        <p>{{ $kampus['deskripsi'] }}</p>
        <a href="{{ route('prodi') }}">Lihat Program Studi &raquo;</a>
    </div>

    <div class="grid">
        @foreach ($statistik as $label => $jumlah)
            <div class="card">
                <h2>{{ $jumlah }}</h2>
                <p>{{ $label }}</p>
            </div>
        @endforeach
    </div>
@endsection