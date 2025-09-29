<html>
  <head>
    <title>
      Form Komentar
    </title>
  </head>
  <body>
    <h1>Data Komentar Anda</h1>
    <hr>
    Nama Anda : <?php echo $_POST ["nama"] . "<br>"?>
    Email Anda : <?php echo $_POST ["email"] . "<br>"?>
    Komentar Anda : <?php echo $_POST ["komen"]?>
    <form action="b4.php" method="post">
      <a href="b4.php">INPUT DATA LAGI</a>
    </form>
  </body>
</html>