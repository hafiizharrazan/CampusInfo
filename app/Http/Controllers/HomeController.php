<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $kampus = [
            'nama'      => 'CampusInfo University',
            'tagline'   => 'Informasi kampus dalam satu tempat',
            'deskripsi' => 'CampusInfo menyediakan informasi seputar program studi dan kontak kampus.',
        ];

        $statistik = [
            'Mahasiswa Aktif' => 1200,
            'Dosen'           => 85,
            'Program Studi'   => 4,
        ];

        return view('beranda', compact('kampus', 'statistik'));
    }

    public function kontak()
    {
        $kontak = [
            'alamat'  => 'Jl. Contoh No. 123, Jakarta',
            'telepon' => '(021) 1234-5678',
            'email'   => 'info@campusinfo.test',
            'jam'     => 'Senin - Jumat, 08.00 - 16.00 WIB',
        ];

        return view('kontak', compact('kontak'));
    }
}