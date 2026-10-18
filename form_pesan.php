<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0 fs-4">Form Pesan Mahasiswa</h3>
            </div>
            <div class="card-body">
                <form action="hasil_pesan.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Masukkan Nama:</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Masukkan Kelas:</label>
                        <input type="text" name="kelas" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Pesan / Kesan:</label>
                        <textarea name="pesan" rows="4" class="form-control" required></textarea>
                    </div>
                    <button type="submit" name="tombol_kirim" class="btn btn-primary w-100 mb-2">Kirim Pesan</button>
                    <a href="index.php" class="btn btn-outline-secondary w-100">Kembali ke Halaman Utama</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>