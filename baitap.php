<?php
  $n = 10;
  $mang = array();
  for ($i=0; $i < 10; $i++) {
    $mang[$i] = $i*2;
  }
  foreach ($mang as &$i) {
    echo $i;
    echo " ";
  }
  echo "<br>";
  for ($j=0; $j <count($mang); $j++) {
    echo $mang[$j];
    echo " ";
  }
 ?>
