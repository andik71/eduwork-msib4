<?php 
$file = "data.json"; // Path file
$arr = file_get_contents($file);
$data = json_decode($arr, true);

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
    <div class="container-fluid mt-5 mb-3">
        <div class="container">
            <h5 class="text-light fw-bold">Tugas Switch-Case PHP | Eduwork MSIB4 2023</h5>
        </div>
    </div>
    <!-- Banner End. -->

    <!-- Content Start -->
    <div class="container-fluid">
        <div class="container">

        <!-- Tabel Nilai -->
        <table class="table table-bordered text-light">
            <thead class="text-center">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>Nilai</th>
                    <th>Rentang Nilai</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>

            <?php
                // Variable $no berperan sebagai penomoran
                $no = 1;
                foreach ($data as $row) { // Perulangan foreach
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

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['tanggal_lahir'] ?></td>
                    <td><?= $row['umur'] ?> Tahun</td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['kelas'] ?></td>
                    <td class="text-center"><?= number_format($row['nilai']) ?></td>
                    <td class="text-center"><?= $grade ?></td>
                    <td><?= $ket ?></td>
                </tr>

                <?php } ?>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="9" class="text small">Total: <?= count($row) ?> </th>
                </tr>
            </tfoot>

        </table>

                

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