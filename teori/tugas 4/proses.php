<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Evaluasi Kinerja</title>
</head>

<body>
  <table border="1" cellspacing="0">
    <thead>
      <tr>
        <th align="left" colspan="3">
          B. Evaluasi Kinerja
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="3">Arti Nilai</td>
      </tr>
      <tr>
        <td>1</td>
        <td colspan="2">: sangat tidak baik/ sangat rendah/ tidak pernah</td>
      </tr>

      <tr>
        <td>2</td>
        <td colspan="2">: tidak baik/ rendah/ jarang</td>
      </tr>

      <tr>
        <td>3</td>
        <td colspan="2">: biasa/ cukup/ kadang-kadang</td>
      </tr>

      <tr>
        <td>4</td>
        <td colspan="2">: baik/ tinggi/ sering</td>
      </tr>

      <tr>
        <td>5</td>
        <td colspan="2">: sangat baik/ sangat tinggi/ selalu</td>
      </tr>

      <tr>
        <th>No. </th>
        <th>Kriteria</th>
        <th>Nilai</th>
      </tr>
      <tr align="left">
        <th colspan="3">B.1 Mahasiswa</th>
      </tr>

      <tr>
        <td>1</td>
        <td>Rerata kemampuan kognitif</td>
        <td>
          <?= $_POST['kognitif']; ?>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Rerata kemampuan afektif</td>
        <td>
          <?= $_POST['afektif']; ?>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Kedisiplinan/ ketepatan pengumpulan tugas (jika tidak ada, nilai = 1)</td>
        <td>
          <?= $_POST['kedisiplinan']; ?>
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>Ketertiban/ suasana kelas</td>
        <td>
          <?= $_POST['ketertiban']; ?>
        </td>
      </tr>

      <tr align="left">
        <th colspan="3">B.2 Dosen (Evaluasi dari dalam PBM)</th>
      </tr>

      <tr>
        <td>1</td>
        <td>Pembahasan latihan soal</td>
        <td>
          <?= $_POST['pembahasan']; ?>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Kualitas diskusi dan tanya jawab</td>
        <td>
          <?= $_POST['diskusi']; ?>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Kemampuan menjelaskan materi</td>
        <td>
          <?= $_POST['materi']; ?>
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>Penguasaan materi kuliah</td>
        <td>
          <?= $_POST['penguasaan']; ?>
        </td>
      </tr>
      <tr>
        <td>5</td>
        <td>Kemampuan menjawab pertanyaan</td>
        <td>
          <?= $_POST['menjawab']; ?>
        </td>
      </tr>
      <tr>
        <td>6</td>
        <td>Penguasaan kelas</td>
        <td>
          <?= $_POST['kelas']; ?>
        </td>
      </tr>

      <tr>
        <td colspan="3"> &raquo; Keterlambatan waktu mengajar :</td>
      </tr>
      <tr>
        <td colspan="3">
          <?= $_POST['keterlambatan']; ?>
        </td>
      </tr>
      <tr>
        <td colspan="3">&raquo; Jumlah mahasiswa yang terlambat :</td>
      </tr>
      <tr>
        <td colspan="3">
          <?= $_POST['mahasiswa']; ?>
        </td>
      </tr>
      <tr>
        <td colspan="3">&raquo; Pemberian sanksi mahasiswa bermasalah :
          <?= $_POST['sanksi']; ?>
        </td>
      </tr>
      <tr>
        <td colspan="3">Pembahasan tugas (jika ada):</td>
      </tr>
      <tr>
        <td colspan="3">
          <?= $_POST['tugas']; ?>
        </td>
      </tr>
      <tr>
        <td colspan="3">&raquo; Tingakat kejenuhan mengajar hari ini:</td>
      </tr>
      <tr>
        <td colspan="3">
          <?= $_POST['jenuh']; ?>
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>