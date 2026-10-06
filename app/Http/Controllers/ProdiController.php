<?php

namespace App\Http\Controllers;

class ProdiController extends Controller
{
    public function index()
    {
        $prodi = [
            ['nama' => 'Teknik Informatika', 'jenjang' => 'S1', 'akreditasi' => 'B', 'deskripsi' => 'Mempelajari pemrograman, jaringan, dan rekayasa perangkat lunak.'],
            ['nama' => 'Sistem Informasi',   'jenjang' => 'S1', 'akreditasi' => 'B', 'deskripsi' => 'Menggabungkan teknologi informasi dengan proses bisnis.'],
            ['nama' => 'Manajemen Informatika', 'jenjang' => 'D3', 'akreditasi' => 'C', 'deskripsi' => 'Fokus pada keterampilan praktis pengelolaan sistem informasi.'],
            ['nama' => 'Teknik Komputer',    'jenjang' => 'S1', 'akreditasi' => 'B', 'deskripsi' => 'Mempelajari arsitektur komputer dan perangkat keras.'],
        ];

        return view('prodi', compact('prodi'));
    }
}