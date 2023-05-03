<?php 

$title = [
   'title' => 'Panduan Belajar PHP untuk Pemula',
   'title' => 'Membangun Aplikasi Web dengan PHP',
   'title' => 'Tutorial PHP dan MySQL',
   'title' => 'Membuat Chat Bot Dengan PHP'
];

echo '<h5>Judul Buku PHP</h5>';
echo '<ul>';
foreach ($title as $tow) {
    echo '<li>'. $row['title'] .'</li>';
}
echo '</ul>';


?>