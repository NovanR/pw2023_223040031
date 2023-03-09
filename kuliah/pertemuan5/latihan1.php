<?php 
    // ARRAY
    // Membuat array
    $hari = array('senin','selasa','rabu');
    $bulan = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
    $myarray = ['Novan',10,false];
    $binatang = ['🐂','🦈','🐼','🐔','🐏','🐍'];

    // Mencetak
    echo "<hr>";
    var_dump($hari);
    echo "<hr>";
    print_r($bulan);
    echo "<hr>";
    var_dump($myarray);
    echo "<hr>";

    // manipulasi array
    // menggunakan index
    $hari[] = 'kamis';
    $hari[] = "jum'at";
    print_r($hari);
    echo "<hr>";

    // menambar array di akhir
    array_push($bulan, 'KKALM');
    print_r($bulan);
    echo "<hr>";
    
    //menambah elemen array di awal
    array_unshift($binatang, '🐍');
    print_r($binatang);
    echo "<hr>";

    // menghapus array di akhir
    array_pop($hari);
    print_r($hari);
    echo "<hr>";

    // menghapus array diawal
    array_shift($hari);
    print_r($hari);

?>