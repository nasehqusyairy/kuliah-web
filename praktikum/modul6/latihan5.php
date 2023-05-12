<?php
function cari($array, $cari): bool
{
  // lakukan pencarian
  foreach ($array as $item) {
    // jika ditemukan, return true
    if ($item === $cari) {
      return true;
    }
  }
  // jika tidak, return false
  return false;
}

// implementasi
$angka = array(1, 2, 3, 4, 5);
if (cari($angka, 3)) {
  echo "Nilai 3 ditemukan pada array!";
} else {
  echo "Nilai 3 tidak ditemukan pada array.";
}
