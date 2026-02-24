<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa - {{ $nama_mhs }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body { background-color: #f0f2f5; font-family: 'Segoe UI', sans-serif; }
        .profile-header {
            background: linear-gradient(135deg, #0d6efd 0%, #003d99 100%);
            color: white;
            padding: 40px 0;
            border-radius: 0 0 50% 50% / 20px;
            text-align: center;
            margin-bottom: -50px;
        }
        .profile-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .info-label { color: #6c757d; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1px; }
        .info-value { color: #212529; font-weight: 600; font-size: 1.1rem; }
    </style>
</head>
<body>

<div class="profile-header">
    <i class="fas fa-user-graduate fa-4x mb-3"></i>
    <h2>Profil Detail Mahasiswa</h2>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card profile-card">
                <div class="card-body p-5">
                    <div class="mb-4">
                        <span class="info-label">Nama Lengkap</span>
                        <div class="info-value">{{ $nama_mhs }}</div>
                    </div>
                    
                    <div class="row mb-4">
                        <div class="col-6">
                            <span class="info-label">NIM</span>
                            <div class="info-value">{{ $nim }}</div>
                        </div>
                        <div class="col-6">
                            <span class="info-label">Semester</span>
                            <div class="info-value">{{ $semester }}</div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <span class="info-label">Jurusan</span>
                        <div class="info-value">{{ $jurusan }}</div>
                    </div>

                    <hr>

                    <div class="d-grid gap-2 mt-4">
                        <a href="/dosen" class="btn btn-primary rounded-pill">
                            <i class="fas fa-arrow-left me-2"></i>Kembali ke Daftar Dosen
                        </a>
                    </div>
                </div>
            </div>
            <p class="text-center mt-4 text-muted small">STMIK IKMI Cirebon &copy; 2026</p>
        </div>
    </div>
</div>

</body>
</html>