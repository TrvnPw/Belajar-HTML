<html>
  <head>
    <title>Masukkan Nilai</title>
  </head>
  <body>
    <center>
      <form action="b4.1.php" method="post">
      <h1>Rumus - Rumus</h1>
      <table border="1">
        <tr>
          <td>Nilai 1</td>
          <td><input type="text" name="nilai1"></td>
        </tr>
        <tr>
          <td>Nilai 2</td>
          <td><input type="text" name="nilai2"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
          <input type="radio" name="rumus" value="segitiga">Segitiga <br>
          <input type="radio" name="rumus" value="persegi panjang">Pesegi Panjang
          </td>
        </tr> 
      </table>
      <input type="submit" value="Hitung"><input type="reset" value="Batal"> 
    </form>
    </center>
  </body>
</html>