@extends('layouts.app')

@section('title', 'Program Studi')

@section('content')
    <h1>Program Studi</h1>

    <div class="grid">
        @foreach ($prodi as $p)
            <div class="card">
                <h3>{{ $p['nama'] }}</h3>
                <p>Jenjang: {{ $p['jenjang'] }} | Akreditasi: {{ $p['akreditasi'] }}</p>
                <p>{{ $p['deskripsi'] }}</p>
            </div>
        @endforeach
    </div>
@endsection