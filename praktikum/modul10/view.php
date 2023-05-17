<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modul 10</title>
  <style>
    section {
      width: 75%;
      margin: 3rem auto;
    }
  </style>
</head>

<body>
  <main>
    <section>
      <table border="1" cellspacing="0">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Komentar</th>
          </tr>
        </thead>
        <tbody>
          <?php
          require_once 'koneksi.php';
          $sql = mysqli_query($conn, "SELECT * FROM bukutamu");
          $i = 1;
          while ($data = mysqli_fetch_assoc($sql)) {
          ?>
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $data['nama']; ?></td>
              <td><?= $data['email']; ?></td>
              <td><?= $data['komentar']; ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </section>
  </main>
</body>

</html>