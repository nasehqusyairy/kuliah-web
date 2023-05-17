<?php
// ambil isi file
$filename = 'guestbook.txt';
$content = file_get_contents($filename);

// ubah menjadi array
$data = explode("\n", $content);

// simpan
if (isset($_POST['submit'])) {
  array_push($data, $_POST['nama'] . ';' . $_POST['komentar']);
}

// hapus
if (isset($_GET['hapus'])) {
  array_splice($data, $_GET['hapus'], 1);
}

// ubah menjadi string
$data = implode("\n", $data);

// simpan ke dalam file
$stream = fopen($filename, 'w');
fwrite($stream, $data);
fclose($stream);

header('location:latihan5.php');
