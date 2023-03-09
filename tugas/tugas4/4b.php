<?php 
$hardware = ['Motherboard','Processor','Hard disk','PC Coller','VGA Card','SSD']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
</head>
<body>
    <h2>Macam macam perangkat keras komputer</h2>
   <?php 
   echo "<ol>";
    foreach($hardware as $h) {
        echo "<li>$h</li>";
    }
    echo "</ol>";
    echo "<br>";
   ?>

   <h2>Macam-macam perangkat keras komputer baru</h2>
   <?php
   array_unshift($hardware, 'Modem');
   array_unshift($hardware, 'Card Reader');
   sort($hardware);
    echo "<ol>";
        foreach($hardware as $h) {
            echo "<li>$h</li>";
        }
            echo "</ol>";
   ?>
</body>
</html>