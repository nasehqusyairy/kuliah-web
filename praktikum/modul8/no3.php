<?php
$numberedString = "1234567890123456789012345678901234567890";
$urutan = 1;

for ($i = 0; $i < strlen($numberedString); $i++) {

  if ($numberedString[$i] === "5") {
    $posisi = $i + 1;
    echo "Posisi angka 5 ke-$urutan adalah $posisi<br>";
    $urutan++;
  }
}
