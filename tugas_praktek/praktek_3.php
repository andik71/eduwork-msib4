<?php 

// PHP Part 3 | Array dengan Looping for

$arr = [
    ['nama' => 'Pelita', 'umur' => 23, 'kelas' => 'Laravel'],
    ['nama' => 'Najmina', 'umur' => 20, 'kelas' => 'Node JS'],
    ['nama' => 'Fahmi', 'umur' => 26, 'kelas' => 'Digital Marketing'],
    ['nama' => 'Anita', 'umur' => 21, 'kelas' => 'UI/UX Designer'],
    ['nama' => 'Nasa', 'umur' => 23, 'kelas' => 'Grapich Designer']
]; // array obj

foreach ($arr as $row) {
    echo 'Nama : ' . $row['nama']. ' Umur : ' . $row['umur'] . ' Kelas : ' . $row['kelas'] . '<br>';

}
?>