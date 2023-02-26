<?php 
echo 'Mulai. <br>';
while(false) {
    echo 'hello world';
}
echo 'Hello World <br>';
echo 'Selesai. <br><br>';
echo "<hr>";
?>

<!-- pengulangan while -->
<!-- 1. inisialisasi / nilai awal -->
<!-- 2. kondisi terminasi / kapan pengulangan nya berhenti -->
<!-- 3. increment / decrement -->

<?php 
$nilai_awal = 1; //inisialisasi

echo "Mulai. <br>";
while($nilai_awal <= 5) { //kondisi terminasi
    echo "Hello World $nilai_awal x<br>";
    $nilai_awal = $nilai_awal + 1;
}
echo "<hr>";
?>

<?php 
$nilai_awal = 5;

echo "<br>Mulai. <br>";
while($nilai_awal >= 1) {
    echo "Hello World $nilai_awal x<br>";
    $nilai_awal = $nilai_awal - 1;
}
echo "<hr>";
?>

<?php 
for ($nilai_awal = 1; $nilai_awal <=10; $nilai_awal++) {
    echo "Hello World $nilai_awal x<br>";
}
?>