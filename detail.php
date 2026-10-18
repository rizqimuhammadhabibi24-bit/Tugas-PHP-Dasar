<?php
if (
    !isset($_GET["nim"]) ||
    !isset($_GET["nama"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["nilai"]) ||
    !isset($_GET["grade"]) ||
    !isset($_GET["status"])
) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white">
                <h3 class="mb-0 fs-4">Detail Mahasiswa</h3>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item"><strong>NIM:</strong> <?= $_GET["nim"]; ?></li>
                    <li class="list-group-item"><strong>Nama:</strong> <?= $_GET["nama"]; ?></li>
                    <li class="list-group-item"><strong>Jurusan:</strong> <?= $_GET["jurusan"]; ?></li>
                    <li class="list-group-item"><strong>Email:</strong> <?= $_GET["email"]; ?></li>
                    <li class="list-group-item"><strong>Nilai:</strong> <?= $_GET["nilai"]; ?></li>
                    <li class="list-group-item"><strong>Grade:</strong> <span class="badge bg-secondary"><?= $_GET["grade"]; ?></span></li>
                    <li class="list-group-item"><strong>Status:</strong> 
                        <span class="badge <?= ($_GET["status"] == "Lulus") ? "bg-success" : "bg-danger"; ?>">
                            <?= $_GET["status"]; ?>
                        </span>
                    </li>
                </ul>
                <a href="index.php" class="btn btn-secondary w-100">Kembali</a>
            </div>
        </div>
    </div>

</body>
</html>