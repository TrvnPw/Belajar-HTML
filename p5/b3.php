<html>
  <head>
    <title>Form  Registrasi</title>
  </head>
  <body>
    <h1>Form Registrasi</h1>
    <form action="b3.1.php" method="post">
      <pre style="line-height: 2.1;">
Isi Data Dibawah ini : 
Nama            <input type="text" name="nama">
Alamat          <textarea name="alamat" rows="5" cols="40" style="vertical-align: middle;"></textarea>
Tempat Lahir    <input type="text" name="tempat">
Tanggal Lahir   <input type="text" name="tanggal">
Jenis Kelamin   <input type="radio" name="kelamin" value="Laki-laki">Laki-laki <input type="radio" name="kelamin" value="Perempuan">Perempuan
Pendidikan      <select name="pendidikan">
  <option value="S1">S1</option>
  <option value="S2">S2</option>
  <option value="S3">S3</option>
  <option value="SMA">SMA</option>
</select>
<input type="submit" value="Submit"> <input type="reset" value="Cancel">
      </pre>
    </form>
  </body>
</html>