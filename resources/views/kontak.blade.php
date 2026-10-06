@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <h1>Kontak Kami</h1>

    <div class="card">
        <p><strong>Alamat:</strong> {{ $kontak['alamat'] }}</p>
        <p><strong>Telepon:</strong> {{ $kontak['telepon'] }}</p>
        <p><strong>Email:</strong> {{ $kontak['email'] }}</p>
        <p><strong>Jam Layanan:</strong> {{ $kontak['jam'] }}</p>
    </div>
@endsection