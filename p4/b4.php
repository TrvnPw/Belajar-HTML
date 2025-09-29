<html>
  <head>
    <title>
      Form Komentar
    </title>
  </head>
  <body>
    <h1>
      <b>BUKU TAMU</b>
    </h1>
    <p>
      Komentar dan Saran Anda Sangat Kami Butuhkan <br> 
      Untuk Meningkatkan Kualitas Situs Kami
    </p>
    <hr>
    <form action="b4.1.php" method="post">
      <table>
        <tr>
          <td>Nama Anda</td>
          <td>:</td>
          <td><input type="text" name="nama" size="30"></td>
        </tr>
        <tr>
          <td>Email Anda</td>
          <td>:</td>
          <td><input type="email" name="email" size="30"></td>
        </tr>
        <tr>
          <td valign="top">Komentar Anda</td>
          <td valign="top">:</td>
          <td><textarea name="komen" rows="5" cols="40"></textarea></td>
        </tr>
        <tr>
          <td>
            <input type="submit" value="Kirim">
            <input type="reset" value="Batal">
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>