<?php 
$file = "data.json"; // Path file
$arr = file_get_contents($file);
$data = json_decode($arr, true);

// Looping
foreach ($data as $row) {
    echo ' Nama: ' . $row['nama'] . '<br>';
}

?>