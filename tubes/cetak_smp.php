<?php

require_once __DIR__ . '/vendor/autoload.php';

require('views/functions.php');


$smp = query('SELECT * FROM smp');

$mpdf = new \Mpdf\Mpdf();

$html =
  '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>Daftar Materi Sekolah Menengah Pertama</h1>
    <table border="1" cellpadding="10" cellspacing="0">
          <tr>
            <th>ID</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Penjelasan</th>
            <th>Youtube</th>
          </tr>';
$i = 1;
foreach ($smp as $semua) {
  $html .= '<tr>
             <td>' . $i++ . '</td>
             <td><img src="img/' . $semua["gambar"] .'" width="200"></td>
             <td>' . $semua["judul"] . '</td>
             <td>' . $semua["penjelasan"] . '</td>
             <td>' . $semua["youtube"] . '</td>
    </tr>';
}


$html .= '</table>
</body>
</html>';




$mpdf->WriteHTML($html);
$mpdf->Output('Daftar-Materi-SMP.pdf', \Mpdf\Output\Destination::INLINE);
