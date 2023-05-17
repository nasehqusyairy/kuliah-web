<?php
$filename = 'guestbook.txt';
$stream = fopen($filename, 'a');
fwrite($stream, $_POST['nama'] . ';' . $_POST['komentar'] . "\n");
fclose($stream);

header('location:latihan5.php');
