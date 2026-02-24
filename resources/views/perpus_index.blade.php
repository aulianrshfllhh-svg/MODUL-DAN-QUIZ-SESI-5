<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Perpustakaan | IKMI Cirebon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { background-color: #f8f9fa; }
        .hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            color: white;
            padding: 60px 0;
            margin-bottom: 40px;
        }
        .book-card {
            transition: transform 0.3s;
            border: none;
            border-left: 5px solid #1e3a8a;
        }
        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="hero-section text-center">
    <div class="container">
        <i class="fas fa-book-reader fa-3x mb-3"></i>
        <h1 class="display-5 fw-bold">Katalog Perpustakaan</h1>
        <p class="lead">Sistem Informasi Perpustakaan STMIK IKMI Cirebon</p>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="mb-4 text-secondary"><i class="fas fa-list me-2"></i>Daftar Koleksi Terbaru</h3>
            
            <div class="list-group shadow-sm">
                {{-- Soal 2.3: Menampilkan data dengan @foreach --}}
                @foreach($koleksi as $judul)
                    <div class="list-group-item list-group-item-action book-card mb-2 d-flex justify-content-between align-items-center p-3">
                        <div>
                            <i class="fas fa-book text-primary me-3"></i>
                            <span class="fw-medium">{{ $judul }}</span>
                        </div>
                        <a href="{{ url('/koleksi/'.rand(100,200)) }}" class="btn btn-sm btn-outline-primary rounded-pill">
                            Lihat Detail
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                <p class="text-muted small">Dibuat untuk Tugas Quiz Modul 5 - Pemrograman Web Lanjut</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>