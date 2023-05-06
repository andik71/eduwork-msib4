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
    <title>PHP Part 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <!-- Banner Start -->
    <div class="container-fluid mt-5 mb-3">
        <div class="container">
            <h5 class="text-dark fw-bold">PHP Part 4 | Eduwork MSIB4 2023</h5>
        </div>
    </div>
    <!-- Banner End. -->

    <!-- Content Start -->
    <div class="container-fluid">
        <div class="container">

            <!-- Tabel Nilai -->
            <table class="table table-bordered text-dark bg-light">
                <thead class="text text-center text-light bg-dark">
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
                        // perhitungan umur
                        $tgl_lahir = new DateTime($row['tanggal_lahir']);
                        $currentDate = new DateTime();
                        $age = $currentDate->diff($tgl_lahir);

                        // ternary
                        $warna = ($age->y % 2 == 0) ? 'bg-warning' : 'bg-info' ;

                        // nilai
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
                               $ket = 'Baik';
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
                                $grade= 'C+';
                               $ket = 'Cukup';
                                break;
                            case $row['nilai'] >= 60 && $row['nilai'] <= 64.9:
                                $grade= 'C';
                               $ket = 'Cukup';
                                break;
                            case $row['nilai'] >= 55 && $row['nilai'] <= 59.9:
                                $grade = 'C-';
                               $ket = 'Cukup';
                                break;
                            case $row['nilai'] >= 50 && $row['nilai'] <= 54.9:
                                $grade = 'D';
                                $ket = 'Kurang';
                                break;
                            case $row['nilai'] >= 0 && $row['nilai'] <= 49.9:
                                $grade = 'E';
                                $ket = 'Tidak Lulus';
                                break;
                            default:
                                $nilai = 'NaN';
                                $ket = 'Null';
                                break;
                        } ?>


                        <tr class="<?= $warna ?>">
                            <td><?= $no++ ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['tanggal_lahir'] ?></td>
                            <td><?= $age->y ?> Tahun</td>
                            <td><?= $row['alamat'] ?></td>
                            <td><?= $row['kelas'] ?></td>
                            <td class="text-center"><?= $row['nilai'] ?></td>
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
            <p class="text-dark small">2023 &copy; Andika Dwiyanto. All rights reserved</p>
        </div>
    </div>
    <!-- End. Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>