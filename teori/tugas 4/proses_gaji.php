<?php
// menentukan pph
$pph = 10 / 100;

if ($_POST['gaji_pokok'] == 2500000) {
  $pph = 15 / 100;
} elseif ($_POST['gaji_pokok'] == 3000000) {
  $pph = 175 / 1000;
}

$pph = $pph * $_POST['gaji_pokok'];

// totalan
$total_pemasukan = $_POST['gaji_pokok'] + $_POST['tunjangan_fungsional'] + $_POST['tunjangan_struktural'];
$total_pengeluaran = $pph + $_POST['pinjaman'];

$total_penerimaan = $total_pemasukan - $total_pengeluaran;
?>

<p>Nama : <?= $_POST['nama']; ?></p>
<p>Gaji Pokok : <?= $_POST['gaji_pokok']; ?></p>
<p>Tunjangan Fungsional : <?= $_POST['tunjangan_fungsional']; ?></p>
<p>Tunjangan Struktural : <?= $_POST['tunjangan_struktural']; ?></p>
<p>Pinjaman : <?= $_POST['pinjaman']; ?></p>
<p>PPh : <?= $pph; ?></p>
<p>Total Pemasukan : <?= $total_pemasukan; ?></p>
<p>Total Pengeluaran : <?= $total_pengeluaran; ?></p>
<p>Total Penerimaan : <?= $total_penerimaan; ?></p>