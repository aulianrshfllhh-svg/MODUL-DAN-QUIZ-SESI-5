<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View; // Import untuk Bonus Point

class BukuController extends Controller
{
    public function index(): View // Bonus Point: Type-Hinting
    {
        // Soal 2.1: Menyiapkan variabel array
        $data_buku = [
            "Laskar Pelangi - Andrea Hirata",
            "Bumi Manusia - Pramoedya Ananta Toer",
            "Filosofi Teras - Henry Manampiring",
            "Negeri 5 Menara - Ahmad Fuadi"
        ];

        // Soal 2.2: Mengirim ke view perpus_index
        return view('perpus_index', [
            'koleksi' => $data_buku
        ]);
    }

    public function show(string $id)
    {
        // Soal 3: Parameter URL
        return "Anda sedang melihat detail buku dengan Kode: [" . $id . "]";
    }
}