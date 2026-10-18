<?php
if (
    !isset($_POST["nama"]) ||
    !isset($_POST["kelas"]) ||
    !isset($_POST["pesan"])
) {
    header("Location: form_pesan.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h3 class="mb-0 fs-4">Pesan Berhasil Dikirim</h3>
            </div>
            <div class="card-body">
                <p class="fs-5">Terima kasih, <strong><?= $_POST["nama"]; ?></strong>!</p>
                <ul class="list-group list-group-flush mb-4">
                    <li class="list-group-item"><strong>Nama:</strong> <?= $_POST["nama"]; ?></li>
                    <li class="list-group-item"><strong>Kelas:</strong> <?= $_POST["kelas"]; ?></li>
                    <li class="list-group-item"><strong>Pesan / Kesan:</strong> <?= $_POST["pesan"]; ?></li>
                </ul>
                <a href="index.php" class="btn btn-primary w-100">Kembali ke Halaman Utama</a>
            </div>
        </div>
    </div>

</body>
</html>