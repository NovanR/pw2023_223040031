<?php

$novan = "Novan";
$ramdan = "Ramdan";

for ($i = 1; $i < 100; $i++) {
  if ($i % 3 == 0 and $i % 5 == 0) {
    echo $novan . " " . $ramdan . "<br>";
  } elseif ($i % 3 == 0) {
    echo $novan . "<br>";
  } elseif ($i % 5 == 0) {
    echo $ramdan . "<br>";
  } else {
    echo $i . "<br>";
  }
}
?>
