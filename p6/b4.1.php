<html>
  <head>
    <title>Hasil Hitung</title>
  </head>
  <body>
    <P>HASIL HITUNG RUMUS</P>
    <?php
    $nilai1 = $_POST["nilai1"];
    $nilai2 = $_POST["nilai2"];
    $rumus = $_POST["rumus"];
    
    echo "Nilai a adalah = $nilai1 <br>" ; 
    echo "Nilai b adalah = $nilai2 <br>"; 
    echo "Rumus Yang Dipilih Adalah = $rumus <br>"; 
    if($nilai1 == 0 && $nilai2 == 0){
    echo "Tidak ada nilai tidak ada perhitungan";
    }elseif($rumus == "segitiga"){
      $hasil = 0.5 * ($nilai1 * $nilai2);
      echo "Hasil Perhitungan Rumus = $hasil <br>";
    }elseif($rumus == "persegi panjang"){
      $hasil = $nilai1 * $nilai2;
      echo "Hasil Perhitungan Rumus = $hasil <br>";
    }else{
      echo "Tolong Masukkan Rumus Dengan Benar";
    }    
    ?> 
  </body>
</html>