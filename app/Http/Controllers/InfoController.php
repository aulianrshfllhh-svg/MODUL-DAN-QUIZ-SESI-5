<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\view\view;

class InfoController extends Controller
{
    public function ikmi()
    {
        return('Halo! Saya berkuliah di STMIK IKMI Cirebon');
    }

    public function dosen(): View
    {
        $namaDosen = "Rudi Kurniawan, S.Kom., M.T.";
        $matkul = "Pemrograman Web Lanjut";
        $mahasiswa = ["Aulia", "Budi", "Siti", "Dedi"];
        $tahun_akademik = "2025/2026";

        return view('info_dosen', [
            'nama' => $namaDosen,
            'mata_kuliah' => $matkul,
            'list_mhs' => $mahasiswa,
            'tahun_akademik' => $tahun_akademik
        ]);
    }

    public function detailmahasiswa($Aulia): View
    {
        $nama = "$Aulia";
        $nim = "43240446";
        $jurusan = "Sistem Informasi";
        $semester = 4;

        return view('detail_mahasiswa', [
            'nama_mhs' => $nama,
            'nim' => $nim,
            'jurusan' => $jurusan,
            'semester' => $semester
        ]);
    }
}
