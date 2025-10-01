<html>

<head>
  <title>Tugas 06</title>
</head>

<body>
  <?php
  $nama = $_POST["nama"];
  $alamat = $_POST["alamat"];
  $tempatLahir = $_POST["tempat"];
  $tanggalLahir = $_POST["tanggal"];
  $jenisKelamin = $_POST["kelamin"];
  $pendidikan = $_POST["pendidikan"];
  ?>
  <h1>Data Registrasi</h1>
  <table border="1" width="500">
    <tr>
      <td>Nama</td>
      <td><?php echo $nama?></td>
    </tr>
    <tr>
      <td>Alamat</td>
      <td><?php echo $alamat?></td>
    </tr>
    <tr>
      <td>Tempat Lahir</td>
      <td><?php echo $tempatLahir?></td>
    </tr>
    <tr>
      <td>Tanggal Lahir</td>
      <td><?php echo $tanggalLahir?></td>
    </tr>
    <tr>
      <td>Jeni Kelamin</td>
      <td><?php echo $jenisKelamin?></td>
    </tr>
    <tr>
      <td>Pendidikan</td>
      <td><?php echo $pendidikan?></td>
    </tr>
  </table>
  <a href="b3.php">Back To Home</a>
</body>

</html>