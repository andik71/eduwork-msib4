<?php 

error_reporting(0); // Menghilangkan notif warning

// Soal 1. Menghitung Volume Bola
if (isset($_POST['tombol1'])) { // Tangkap nilai dari input saat tombol ditekan
    $jari = $_POST['jari']; // mengambil nilai dari input

    $hasil1 = 4 / 3 * 3.14 * pow($jari, 3);
}

// Soal 2. Menghitung Volume Balok
if (isset($_POST['tombol2'])){
    $p = $_POST['panjang'];
    $l = $_POST['lebar'];
    $t = $_POST['tinggi'];

    $hasil2 = $p * $l * $t;
}

// Soal 3. Menghitung Volume Tabung
if (isset($_POST['tombol3'])) {
    $rt = $_REQUEST['jari_tabung'];
    $tt = $_REQUEST['tinggi_tabung'];

    $hasil3 = 3.14 * pow($rt, 2) * $tt;
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andika Dwiyanto | PHP Menghitung Volume Bangun Ruang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <!-- Headline Start -->
    <div class="container-fluid">
        <div class="container mt-5 mb-3">
            <h5 class="fw-bold text-light">Tugas Operator PHP | Eduwork MSIB4 2023</h5>
        </div>
    </div>
    <!-- End. Headline -->

    <!-- Content Start -->
    <div class="container-fluid">
        <div class="container">
            <!-- Grid -->
            <div class="row">

                <!-- Col 1 -->
                <div class="col-lg-12 col-md-4 mb-3">
                    <div class="card">
                        <h5 class="card-title mx-3 mt-3">Menghitung Volume Bola</h5>
                        <h6 class="card-subtitle mx-3 mb-2 text-body-secondary">Rumus: V = 4/3 x π × r³</h6>
                        <div class="card-body">
                            <!-- Form Control -->
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nilai Jari-Jari (r):</label>
                                    <input name="jari" type="number" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Hasil (cm<sup>3</sup>) :</span>
                                    <input type="text" class="form-control" placeholder="<?= number_format($hasil1, 1) ?>" aria-label="" aria-describedby="basic-addon1" disabled>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-sm btn-primary" type="submit" id="tombol1" name="tombol1">Hitung</button>
                                    <button class="btn btn-sm btn-secondary" type="reset">Reset</button>
                                </div>
                            </form>
                            <!-- End. Form Control -->
                        </div>
                    </div>
                </div>

                <!-- Col 2 -->
                <div class="col-lg-12 col-md-4 mb-3">
                    <div class="card">
                        <h5 class="card-title mx-3 mt-3">Menghitung Volume Balok</h5>
                        <h6 class="card-subtitle mx-3 mb-2 text-body-secondary">Rumus: V = P x L x T</h6>
                        <div class="card-body">
                            <!-- Form Control -->
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nilai Panjang (p):</label>
                                    <input name="panjang" type="number" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nilai Lebar (l):</label>
                                    <input name="lebar" type="number" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nilai Tinggi (t):</label>
                                    <input name="tinggi" type="number" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Hasil (cm<sup>3</sup>) :</span>
                                    <input type="text" class="form-control" placeholder="<?= $hasil2 ?>" aria-label="" aria-describedby="basic-addon1" disabled>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-sm btn-primary" type="submit" id="tombol2" name="tombol2">Hitung</button>
                                    <button class="btn btn-sm btn-secondary" type="reset">Reset</button>
                                </div>
                            </form>
                            <!-- End. Form Control -->
                        </div>
                    </div>
                </div>

                <!-- Col 3 -->
                <div class="col-lg-12 col-md-4 mb-3">
                    <div class="card">
                        <h5 class="card-title mx-3 mt-3">Menghitung Volume Tabung</h5>
                        <h6 class="card-subtitle mx-3 mb-2 text-body-secondary">Rumus: V = π × r² × t</h6>
                        <div class="card-body">
                            <!-- Form Control -->
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nilai Jari-Jari (r):</label>
                                    <input name="jari_tabung" type="number" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nilai Tinggi (t):</label>
                                    <input name="tinggi_tabung" type="number" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Hasil (cm<sup>3</sup>) :</span>
                                    <input type="text" class="form-control" placeholder="<?= $hasil3 ?>" aria-label="" aria-describedby="basic-addon1" disabled>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-sm btn-primary" type="submit" id="tombol3" name="tombol3">Hitung</button>
                                    <button class="btn btn-sm btn-secondary" type="reset">Reset</button>
                                </div>
                            </form>
                            <!-- End. Form Control -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End. Content -->

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