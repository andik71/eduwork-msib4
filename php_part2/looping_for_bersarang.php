
<?php
for ($i = 0; $i <= 9; $i++) { // for pertama akan melooping secara vertikal
    for ($j = 9 - $i; $j >= 1; $j--) { // for kedua akan melooping secara horizontal
        echo "* "; // mencetak simbol asterisk
    }
    echo "<br>"; // break
}
?>