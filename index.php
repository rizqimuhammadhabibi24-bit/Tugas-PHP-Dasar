<?php
$mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "Rizqi Muhammad Habibi",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "rizqihbibi24@upi.edu",
        "nilai" => 100
    ],
    [
        "nim" => "25002",
        "nama" => "Siti Hermawati",
        "jurusan" => "Pendidikan Guru Sekolah Dasar",
        "email" => "sitiansyah21@upi.edu",
        "nilai" => 75
    ],
    [
        "nim" => "25003",
        "nama" => "Aziz Radiator",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "abdulaziz25@upi.edu",
        "nilai" => 50
    ],
    [
        "nim" => "25004",
        "nama" => "Wildan Koopling",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "wildanagzt22@upi.edu",
        "nilai" => 60
    ],
    [
        "nim" => "25005",
        "nama" => "Hanin Rosida",
        "jurusan" => "Pendidikan Guru Pendidikan Anak Usia Dini",
        "email" => "haninr26@upi.edu",
        "nilai" => 85
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h3 class="mb-0 fs-4">Daftar Mahasiswa</h3>
                <a href="form_pesan.php" class="btn btn-light btn-sm fw-bold">Isi Form Pesan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle mb-0">
                        <thead class="table-dark text-center">
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Jurusan</th>
                                <th>Nilai</th>
                                <th>Grade</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($mahasiswa as $data): ?>
                                <?php
                                if ($data["nilai"] >= 80) {
                                    $grade = "A";
                                } elseif ($data["nilai"] >= 70) {
                                    $grade = "B";
                                } elseif ($data["nilai"] >= 60) {
                                    $grade = "C";
                                } else {
                                    $grade = "D";
                                }

                                if ($data["nilai"] >= 70) {
                                    $status = "Lulus";
                                    $badge_status = "bg-success";
                                } else {
                                    $status = "Tidak Lulus";
                                    $badge_status = "bg-danger";
                                }

                                $url = "detail.php?nim=" . $data["nim"]
                                     . "&nama=" . $data["nama"]
                                     . "&jurusan=" . $data["jurusan"]
                                     . "&email=" . $data["email"]
                                     . "&nilai=" . $data["nilai"]
                                     . "&grade=" . $grade
                                     . "&status=" . $status;
                                ?>
                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td class="text-center"><?= $data["nim"]; ?></td>
                                    <td><?= $data["nama"]; ?></td>
                                    <td><?= $data["jurusan"]; ?></td>
                                    <td class="text-center"><?= $data["nilai"]; ?></td>
                                    <td class="text-center"><span class="badge bg-secondary"><?= $grade; ?></span></td>
                                    <td class="text-center"><span class="badge <?= $badge_status; ?>"><?= $status; ?></span></td>
                                    <td class="text-center">
                                        <a href="<?= $url; ?>" class="btn btn-info btn-sm text-white">Lihat Detail</a>
                                    </td>
                                </tr>
                                <?php $no++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>