<?php
$myFile = "testFile.txt";

$fh = fopen($myFile, 'r');
//parameter kedua diisi 'r' karena digunakan untuk membaca isi file

// // latihan 1
// $theData = fread($fh, filesize($myFile));

// latihan 2
$theData = fgets($fh);
echo $theData;
$theData = fgets($fh);

echo $theData;
fclose($fh);
