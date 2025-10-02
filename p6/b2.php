<?php
$nilai = 90;
if(($nilai >= 0) && ($nilai < 50)){
  $grade = "E";
}elseif(($nilai >= 50) && ($nilai < 60)){
  $grade = "F";
}elseif(($nilai >= 60) && ($nilai < 70)){
  $grade = "D";
}elseif(($nilai >= 70) && ($nilai < 80)){
  $grade = "C";
}elseif(($nilai >= 80) && ($nilai < 90)){
  $grade = "B";
}elseif(($nilai >= 90) && ($nilai < 100)){
  $grade = "A";
}else {
  $grade = "Nilai diluar jangkauan";
}
echo "Nilai Anda : $nilai. dikonversi menjadi $grade";
?>