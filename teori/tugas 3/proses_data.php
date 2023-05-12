<?php
$jawaban = isset($_POST['jawaban']) ? $_POST['jawaban'] : '';

if ($jawaban != 9) {
  echo "Maaf jawaban Anda salah!<br><a href='form_data.php'>Ulangi</a>";
  die;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data User</title>
</head>

<body>
  <p>Hasil Input Data</p>
  <table border="1">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>Jawaban</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?= $_POST['nama']; ?></td>
        <td><?= $_POST['alamat']; ?></td>
        <td><?= $_POST['email']; ?></td>
        <td><?= $_POST['gender']; ?></td>
        <td>Benar</td>
      </tr>
    </tbody>
  </table>
</body>

</html>