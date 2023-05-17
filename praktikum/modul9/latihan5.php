<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan 5</title>
  <style>
    input,
    textarea {
      display: block;
      margin-bottom: 1rem;
    }

    section {
      width: 75%;
      margin: 3rem auto;
    }

    div {
      border: 1px solid #000;
      padding: 1rem;
    }

    h3,
    h5,
    p {
      margin: 0;
      margin-bottom: 1rem;
    }
  </style>
</head>

<body>

  <main>
    <section>
      <form method="post" action="proses.php">
        <label>Nama
          <input type="text" name="nama" required />
        </label>
        <label>Komentar
          <input name="komentar" required />
        </label>
        <input type="submit" name="submit" value="kirim" />
      </form>

      <div>
        <h3>Komentar</h3>
        <?php
        $content = file_get_contents('guestbook.txt');
        // $i = 0;
        $data =  array_filter(explode("\n", $content));
        foreach ($data as $d) {
          $record = explode(';', $d);
        ?>
          <h5><?= $record[0]; ?></h5>
          <p><?= $record[1]; ?></p>
          <!-- <a href="proses.php?hapus=<?= $i++; ?>">hapus</a> -->
          <hr>
        <?php } ?>
      </div>
    </section>
  </main>

</body>

</html>