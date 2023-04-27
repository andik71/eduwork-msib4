<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Andika Dwiyanto | PHP Looping</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-dark text-light">

    <!-- Headline Start -->
    <div class="container-fluid">
        <div class="container mt-3 mb-4 text-center">
            <h5>Tugas Looping PHP | Eduwork MSIB4 2023</h5>
        </div>
    </div>
    <!-- End. Headline -->

    <!-- Content Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 mb-3">
                    <!-- Looping 1. Dengan While -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Soal No. 1</h5>
                            <h6 class="card-subtitle mb-3 text-body-secondary">Looping dengan While</h6>
                            <ul class="list-group list-group-flush">

                                <?php
                                $x = 1;
                                while ($x <= 10) { ?>
                                    <!-- Yang di-looping -->
                                    <li class="list-group-item"> <?= $x . ' x ' . $x . ' = ' . $x ?></li>

                                <?php $x++;
                                } // Static Only 
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <!-- Looping 2. For Bersarang -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Soal No. 2</h5>
                            <h6 class="card-subtitle mb-3 text-body-secondary">Looping dengan For Bersarang</h6>

                            <?php
                            for ($i = 0; $i <= 9; $i++) { // for pertama akan melooping secara vertikal
                                for ($j = 9 - $i; $j >= 1; $j--) { // for kedua akan melooping secara horizontal
                                    echo "* "; // mencetak simbol asterisk
                                }
                                echo "<br>"; // break
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-3">
                    <!-- Looping 2. For Bersarang -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Soal No. 3</h5>
                            <h6 class="card-subtitle mb-3 text-body-secondary">Looping dengan For Bersarang</h6>

                            <?php
                            for ($i = 0; $i <= 8; $i++) {
                                for ($j = 0; $j <= $i; $j++) {
                                    echo $j; // mencetak angka secara default
                                }
                                echo "<br>";
                            }
                            ?>

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