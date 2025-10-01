<html>

<head>
  <title>Input Data Mahasiswa</title>
</head>

<body bgcolor="green">
  <form action="b1.1.php" method="post">
    <b>
      Pengelolaan Data Mahasiswa
    </b>
    <br><br>
    <table>
      <tr>
        <td>
          Nama
        </td>
        <td>:</td>
        <td>
          <input type="text" name="nama">
        </td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat"></td>
      </tr>
    </table>
    <br>
    Jenis Kelamin : 
    <input type="radio" name="kelamin" value="Laki-laki">Laki-laki 
    <input type="radio" name="kelamin" value="Perempuan">Perempuan 
    <br><br>
    Pekerjaan :
    <select name="pekerjaan">
      <option value="Pelajar">Pelajar</option>
      <option value="Karyawan">Karyawan</option>
      <option value="Wirausaha">Wirausaha</option>
      <option value="Lain-lain">Lain-lain</option>
    </select>
    <br><br>
    Hobi : 
    <input type="checkbox" name="hobi1" value="Olahraga">olahraga
    <input type="checkbox" name="hobi2" value="Musik">Musik
    <input type="checkbox" name="hobi3" value="Jalan-jalan">Jalan-jalan
    <br><br>
    <input type="submit" value="Kirim">
    <input type="reset" value="Batal">
  </form>
</body>
</html>