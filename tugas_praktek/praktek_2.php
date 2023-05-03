<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktek Individu 2</title>
</head>

<body>

<h2>Praktek Individu (2)</h2>

    <!-- Content -->
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // PHP Part 3
            $no = 1;
            $Nama = 1;
            $kelas = 10;
            do { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td>Name ke <?= $Nama++ ?></td>
                    <td>Kelas <?= $kelas-- ?></td>
                </tr>
            <?php } while ($Nama < 11);  ?>
        </tbody>
    </table>
    <!-- End. Content -->
</body>

</html>