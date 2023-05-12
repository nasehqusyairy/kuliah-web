<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas Struktur Kontrol</title>
</head>

<body>
  <h1>Form Hitung</h1>
  <form action="proses_hitung.php" method="post">
    <table>
      <tbody>
        <tr>
          <td><label for="value1">value1</label></td>
          <td><input required type="number" name="value1" id="value1"></td>
        </tr>
        <tr>
          <td><label for="value2">value2</label></td>
          <td><input required type="number" name="value2" id="value2"></td>
        </tr>
        <tr>
          <td><label for="operator">operator</label></td>
          <td><select name="operator" id="operator">
              <option value="+">+</option>
              <option value="-">-</option>
              <option value="*">*</option>
              <option value="/">/</option>
              <option value="%">%</option>
            </select></td>
        </tr>
        <tr>
          <td><button type="submit">Hitung</button></td>
          <td><button type="reset">Batal</button></td>
        </tr>
      </tbody>
    </table>
  </form>
</body>

</html>