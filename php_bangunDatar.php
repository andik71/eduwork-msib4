<?php 

error_reporting(0); // Menghilangkan notif warning

// Soal 1. Menghitung luas persegi
if (isset($_POST['tombol1'])) {
    $sisi = $_POST['sisi'];
    $hasil1 = pow($sisi, 2);
}

// Soal 2. Menghitung luas persegi panjang
if (isset($_POST['tombol2'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $hasil2 = $panjang * $lebar;
}

// Soal 3. Menghitung luas segitiga
if (isset($_POST['tombol3'])) {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $hasil3 = 0.5 * ($alas * $tinggi);
}

// Soal 4. Menghitung luas lingkaran
if (isset($_POST['tombol4'])) {
    $jari = $_POST['jari'];

    $hasil4 = 3.14 * pow($jari, 2);
}

// Soal 5. Menghitung luas trapesium
if (isset($_POST['tombol5'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $tt = $_POST['tinggi_trapesium'];

    $hasil5 = 0.5 * ($a + $b) * $tt;
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andika Dwiyanto | PHP Menghitung Luas 5 Bangun Datar</title>
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
                        <h5 class="card-title mx-3 mt-3">Menghitung Luas Bangun Datar Persegi</h5>
                        <h6 class="card-subtitle mx-3 mb-2 text-body-secondary">Rumus: L = s x s</h6>
                        <div class="card-body">
                            <!-- Form Control -->
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nilai Sisi (s):</label>
                                    <input name="sisi" type="number" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Hasil (cm<sup>2</sup>) :</span>
                                    <input type="text" class="form-control" placeholder="<?= $hasil1 ?>" aria-label="" aria-describedby="basic-addon1" disabled>
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
                        <h5 class="card-title mx-3 mt-3">Menghitung Luas Bangun Datar Persegi Panjang</h5>
                        <h6 class="card-subtitle mx-3 mb-2 text-body-secondary">Rumus: L = p x l</h6>
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
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Hasil (cm<sup>2</sup>) :</span>
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
                        <h5 class="card-title mx-3 mt-3">Menghitung Luas Bangun Datar Segitiga</h5>
                        <h6 class="card-subtitle mx-3 mb-2 text-body-secondary">Rumus: L = ½ (a x t)</h6>
                        <div class="card-body">
                            <!-- Form Control -->
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nilai Alas (a):</label>
                                    <input name="alas" type="number" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nilai Tinggi (t):</label>
                                    <input name="tinggi" type="number" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Hasil (cm<sup>2</sup>) :</span>
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

                <!-- Col 4 -->
                <div class="col-lg-12 col-md-4 mb-3">
                    <div class="card">
                        <h5 class="card-title mx-3 mt-3">Menghitung Luas Bangun Datar Lingkaran</h5>
                        <h6 class="card-subtitle mx-3 mb-2 text-body-secondary">Rumus: L = π x r².</h6>
                        <div class="card-body">
                            <!-- Form Control -->
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nilai Jari-Jari (r):</label>
                                    <input name="jari" type="number" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Hasil (cm<sup>2</sup>) :</span>
                                    <input type="text" class="form-control" placeholder="<?= number_format($hasil4, 1) ?>" aria-label="" aria-describedby="basic-addon1" disabled>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-sm btn-primary" type="submit" id="tombol4" name="tombol4">Hitung</button>
                                    <button class="btn btn-sm btn-secondary" type="reset">Reset</button>
                                </div>
                            </form>
                            <!-- End. Form Control -->
                        </div>
                    </div>
                </div>

                <!-- Col 5 -->
                <div class="col-lg-12 col-md-4 mb-3">
                    <div class="card">
                        <h5 class="card-title mx-3 mt-3">Menghitung Luas Bangun Datar Trapesium</h5>
                        <h6 class="card-subtitle mx-3 mb-2 text-body-secondary">Rumus: Luas = ½ × jumlah panjang sisi sejajar (A + B) × tinggi</h6>
                        <div class="card-body">
                            <!-- Form Control -->
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nilai a:</label>
                                    <input name="a" type="number" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nilai b:</label>
                                    <input name="b" type="number" class="form-control" id="exampleFormControlInput1" placeholder="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nilai Tinggi (t):</label>
                                    <input name="tinggi_trapesium" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Hasil (cm<sup>2</sup>) :</span>
                                    <input type="text" class="form-control" placeholder="<?= $hasil5 ?>" aria-label="" aria-describedby="basic-addon1" disabled>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-sm btn-primary" type="submit" id="tombol5" name="tombol5">Hitung</button>
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