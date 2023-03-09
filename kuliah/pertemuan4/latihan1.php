<?php 
    $angka = 10;
    // Memeriksa apakah $angka itu bilangan ganjil
    // Bilangan yang jika dibagi 2 sisanya 1
    function menentukan_ganjil_genap($angka) {
    if($angka % 2 == 1) {
        return "$angka adalah bilangan Ganjil";
    } else {
        return "$angka adalah bilangan Genap";
    }
}
    echo menentukan_ganjil_genap($angka);
    echo "<br>";
    echo menentukan_ganjil_genap(5);
?>