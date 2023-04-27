<?php
// Dibuat oleh: Andika Dwiyanto

error_reporting(0); // Menghilangkan pesan warning

if (isset($_POST['hitung'])) { // Tangkap nilai yang di input berdasarkan name
    $nama = $_POST['nama'];
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];

    // Rumus BMI = bb (kg) / tb^2 (m)
    $tb = $tb / 100; // diubah menjadi satuan meter
    $bmi = $bb / ($tb * $tb);

    // Rentang nilai berdasarkan tabel klasifikasi body mass index dari WHO
    // Number format merupakan method bawaan php untuk menata satuan angka
    if ($bmi >= 30) {
        $hasil = '
        <div class="alert alert-danger" role="alert">
        Halo, ' . $nama . '. Nilai BMI anda adalah ' . number_format($bmi, 1) . ', anda termasuk Obesitas
        </div>
        ';
    } elseif ($bmi >= 25 && $bmi <= 29.9) {
        $hasil = '
        <div class="alert alert-warning" role="alert">
        Halo, ' . $nama . '. Nilai BMI anda adalah ' . number_format($bmi, 1) . ', anda termasuk Gemuk
        </div>
        ';
    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
        $hasil = '
        <div class="alert alert-success" role="alert">
        Halo, ' . $nama . '. Nilai BMI anda adalah ' . number_format($bmi, 1) . ', anda termasuk Normal
        </div>
        ';
    } else {
        $hasil = '
        <div class="alert alert-danger" role="alert">
        Halo, ' . $nama . '. Nilai BMI anda adalah ' . number_format($bmi, 1) . ', anda termasuk Kurus
        </div>
        ';
    }
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andika Dwiyanto | PHP If-Else</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <!-- Main Content -->
    <div class="container-fluid mt-3 mb-3">
        <div class="container-fluid">
            <!-- Grid -->
            <div class="row">

                <!-- Left Grid -->
                <div class="col mb-3">
                    <!-- Banner -->
                    <div class="container-fluid py-5 bg-dark ">
                        <div class="container">
                            <h5 class="text-light">Tugas If-Else PHP | Eduwork MSIB4 2023</h5>
                        </div>
                    </div> <!-- End. Banner -->
                    <!-- Form Section -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cek BMI </h5>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="mt-2"><?= $hasil  ?></div>
                                    <div class="col-12 mb-2">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <input id="nama" name="nama" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Input Nama" required>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label for="exampleFormControlInput1" class="form-label">Tinggi Badan (cm) </label>
                                        <input id="tb" name="tb" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Input TB" required>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label for="exampleFormControlInput1" class="form-label">Berat Badan (kg)</label>
                                        <input id="bb" name="bb" type="number" class="form-control" id="exampleFormControlInput1" placeholder="Input BB" required>
                                    </div>
                                </div>
                                <div class="col-12 mb-2">
                                    <button id="hitung" name="hitung" type="submit" class="btn btn-primary mb-3">Hitung BMI</button>
                                    <button type="reset" class="btn btn-secondary mb-3">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- End. Form Section -->
                    <div class="mt-2">
                        <p class="text-muted small">2023 &copy; Andika Dwiyanto. All rights reserved</p>
                    </div>
                </div>

                <!-- Right Grid -->
                <div class="col">
                    <!-- Article Start -->
                    <h5>Apa itu Body Mass Index?</h5>
                    <p>
                        Body Mass Index (BMI) atau dalam bahasa Indonesia disebut Index Masa Tubuh (IMT) dalah sebuah ukuran “berat terhadap tinggi” badan yang umum digunakan untuk menggolongkan orang dewasa ke dalam kategori Underweight (kekurangan berat badan), Overweight (kelebihan berat badan) dan Obesitas (kegemukan). Rumus atau cara menghitung BMI sangat mudah, yaitu dengan membagi berat badan dalam kilogram dengan kuadrat dari tinggi badan dalam meter (kg/mÂ²).
                    </p>
                    <div class="card mb-3" style="width: 14rem;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary">Rumus:</h6>
                            <img src="http://www.andaka.com/images/rumus-bmi.jpg" style="width: 12rem;" class="card-img-bottom" alt="Rumus BMI">
                        </div>
                    </div>
                    <div class="mb-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Lihat Tabel Klasifikasi
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tabel Klasifikasi Internasional dari Underweight, Overweight dan Obesitas pada Orang Dewasa</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center">
                                        <img src="http://www.andaka.com/images/klasifikasi-bmi-who.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>
                        Contoh: Berat badan saya adalah 77 kg dan tinggi saya adalah 176 cm. Maka BMI saya adalah 77/(1,76)Â² = 24.86 kg/mÂ². Bila dicocokkan dalam tabel di atas maka saya masih masuk dalam kategori normal.
                    </p>
                    <p>
                        Dengan mengetahui nilai BMI maka kita dapat mengetahui apakah kita masuk dalam kategori kurang berat badan, normal, atau kelebihan berat badan dan obesitas (kegemukan). Resiko penyakit yang berhubungan dengan derajat kegemukan seperti penyakit jantung, kencing manis bahkan stroke dapat dilihat dari nilai BMI. Sederhananya, BMI adalah alarm peringatan bagi kesehatan anda!
                    </p>
                    <!-- End. Article -->
                </div>
            </div>
        </div>
    </div>
    <!-- End. Main Content -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>