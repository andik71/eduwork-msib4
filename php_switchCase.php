<?php
// Dibuat oleh: Andika Dwiyanto
$arr_siswa = [
    ['nama' => 'Andika Dwiyanto', 'jk' => 'Pria', 'nilai' => 98.7],
    ['nama' => 'Satria Arya Respati', 'jk' => 'Pria', 'nilai' => 87.4],
    ['nama' => 'Raihan Firmansyah', 'jk' => 'Pria', 'nilai' => 79.5],
    ['nama' => 'Agung Kusaeri', 'jk' => 'Pria', 'nilai' => 90.9],
    ['nama' => 'Akhmad Lylana', 'jk' => 'Pria', 'nilai' => 99.7],
    ['nama' => 'Herlan Djayadi', 'jk' => 'Pria', 'nilai' => 86.66],
    ['nama' => 'Daffa', 'jk' => 'Pria', 'nilai' => 75.7],
    ['nama' => 'Rizky Dharma', 'jk' => 'Pria', 'nilai' => 65],
]; // Array multidimensi yang digunakan untuk menyimpan objek/data

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andika Dwiyanto | PHP Switch-Case</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <!-- Banner Start -->
    <div class="container-fluid mt-3 mb-3">
        <div class="container">
            <h5 class="text-light fw-bold">Tugas Switch-Case PHP | Eduwork MSIB4 2023</h5>
        </div>
    </div>
    <!-- Banner End. -->

    <!-- Content Start -->
    <div class="container-fluid">
        <div class="container">
            <!-- Grid -->
            <div class="row">

                <?php
                // Variable $no berperan sebagai penomoran
                $no = 1;
                foreach ($arr_siswa as $row) { // Perulangan foreach
                    // Operasi Switch-case membuat rentang nilai
                    switch ($row['nilai']) {
                        case $row['nilai'] >= 90 && $row['nilai'] <= 100:
                            $grade = 'A';
                            $ket = 'Sangat Baik';
                            break;
                        case $row['nilai'] >= 85 && $row['nilai'] <= 89.9:
                            $grade = 'A-';
                            $ket = 'Sangat Baik';
                            break;
                        case $row['nilai'] >= 80 && $row['nilai'] <= 84.9:
                            $grade = 'B+';
                            $ket = 'Sangat Baik';
                            break;
                        case $row['nilai'] >= 75 && $row['nilai'] <= 79.9:
                            $grade = 'B';
                            $ket = 'Baik';
                            break;
                        case $row['nilai'] >= 70 && $row['nilai'] <= 74.9:
                            $grade = 'B-';
                            $ket = 'Baik';
                            break;
                        case $row['nilai'] >= 65 && $row['nilai'] <= 69.9:
                            $grade = 'C+';
                            $ket = 'Cukup';
                            break;
                        case $row['nilai'] >= 60 && $row['nilai'] <= 64.9:
                            $grade = 'C';
                            $ket = 'Cukup';
                            break;
                        case $row['nilai'] >= 55 && $row['nilai'] <= 59.9:
                            $grade = 'C-';
                            $ket = 'Kurang';
                            break;
                        case $row['nilai'] >= 50 && $row['nilai'] <= 54.9:
                            $grade = 'D';
                            $ket = 'Tidak Lulus';
                            break;
                        case $row['nilai'] >= 0 && $row['nilai'] <= 49.9:
                            $grade = 'E';
                            $ket = 'Tidak Lulus';
                            break;
                        default:
                            $grade = 'NaN';
                            $ket = 'Null';
                            break;
                    } ?>

                    <!-- Yang di looping -->
                    <div class="col-lg-3 col-sm-6 mb-3">
                        <div class="card">
                            <h5 class="card-title text-center text-light p-1 mb-0 bg-secondary small">No. <?= $no++ ?></h5>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item fw-bold"><?= $row['nama'] ?></li>
                                    <li class="list-group-item small">Jenis Kelamin: <?= $row['jk'] ?></li>
                                    <li class="list-group-item small">Nilai: <span class="fw-bold"><?= $row['nilai'] ?></span></li>
                                    <li class="list-group-item small">Grade: <?= $grade ?></li>
                                    <li class="list-group-item small">Keterangan: <?= $ket ?></li>
                                </ul>

                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
            <!-- Grid End. -->
        </div>
    </div>
    <!-- Content End. -->

    <!-- Footer Start -->
    <div class="container-fluid">
        <div class="container mt-2 text-center">
            <p class="text-light small">2023 &copy; Andika Dwiyanto. All rights reserved</p>
        </div>
    </div>
    <!-- End. Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>