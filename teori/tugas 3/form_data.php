<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data</title>
</head>

<body>
  <h1>From Input Data</h1>
  <form action="proses_data.php" method="post">
    <table>
      <tbody>
        <tr>
          <td><label for="nama">Nama</label></td>
          <td>: <input required type="text" id="nama" name="nama"></td>
        </tr>
        <tr>
          <td><label for="alamat">Alamat </label></td>
          <td>: <textarea name="alamat" id="alamat"></textarea></td>
        </tr>
        <tr>
          <td><label for="jk">Jenis Kelamin </label></td>
          <td>: <label><input required type="radio" name="gender" value="L"> Pria</label>
            <label><input required type="radio" name="gender" value="P"> Wanita</label>
          </td>
        </tr>
        <tr>
          <td><label for="email">Email :</label></td>
          <td>: <input required type="email" name="email" id="email"></td>
        </tr>
        <tr>
          <td>Hitung</td>
          <td>: 1+8</td>
        </tr>
        <tr>
          <td><label for="jawab">Jawab :</label></td>
          <td>: <input required type="number" name="jawaban" id="jawab"></td>
        </tr>
        <tr>
          <td><button type="submit">Simpan</button> </td>
          <td><button type="reset">Batal</button></td>
        </tr>
      </tbody>
    </table>
  </form>

</body>

</html>