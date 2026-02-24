<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Dosen - STMIK IKMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            background: #f4f7f6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding: 40px 0;
        }
        .profile-card {
            background: white;
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            max-width: 500px;
            margin: auto;
        }
        .card-header-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .card-body-custom {
            padding: 30px;
        }
        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 1px dashed #eee;
        }
        .info-item i {
            width: 30px;
            color: #764ba2;
            font-size: 1.2rem;
        }
        .student-list {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 20px;
            margin-top: 20px;
        }
        .badge-student {
            background: #e9ecef;
            color: #495057;
            margin: 3px;
            display: inline-block;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="profile-card">
        <div class="card-header-custom">
            <i class="fas fa-user-tie fa-4x mb-3"></i>
            <h2 class="h4 mb-0">Profil Dosen Pengampu</h2>
            <p class="small opacity-75 mt-2">Tahun Akademik: {{ $tahun_akademik }}</p>
        </div>

        <div class="card-body-custom">
            <div class="info-item">
                <i class="fas fa-id-badge"></i>
                <div>
                    <small class="text-muted d-block">Nama Lengkap</small>
                    <strong>{{ $nama }}</strong>
                </div>
            </div>

            <div class="info-item">
                <i class="fas fa-book-open"></i>
                <div>
                    <small class="text-muted d-block">Mata Kuliah</small>
                    <strong>{{ $mata_kuliah }}</strong>
                </div>
            </div>

            <div class="student-list">
                <h3 class="h6 mb-3 text-uppercase fw-bold"><i class="fas fa-users me-2"></i>Daftar Mahasiswa</h3>
                <div class="d-flex flex-wrap">
                    @foreach($list_mhs as $mhs)
                        <span class="badge-student">
                            <i class="fas fa-user-graduate me-1"></i> {{ $mhs }}
                        </span>
                    @endforeach
                </div>
            </div>
            
            <div class="text-center mt-4">
                <a href="{{ url('/ikmi') }}" class="btn btn-outline-primary btn-sm rounded-pill">
                    <i class="fas fa-arrow-left me-1"></i> Kembali ke Info Kampus
                </a>
            </div>
        </div>
    </div>
</div>

</body>
</html>