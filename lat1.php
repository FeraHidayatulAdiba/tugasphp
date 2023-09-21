<?php
// ini contoh komentar didalam php
echo'hello word';


//lat membuat variabel
$namaSiswa = "budi santoso"; //tipe data string
$umur = 25; // tipe data int
$beratBadan = 30.5; //tipe data float
$_pekerjaan = "mahasiswa";

$jari2 = 15;
define('PHI', 3.14);

$luas = PHI * $jari2 * $jari2;
echo '<br>Nama Mahasiswa : '.$namaSiswa;
echo '<br>Umur : '.$umur;
echo '<br> Berat badan : '.$beratBadan;
echo '<br>Pekerjaan : '.$_pekerjaan;
echo '<br> Berat Badan 2: $beratBadan kg';
echo "<br> Berat badan 3 $beratBadan ";
print '<br> Pekerjaan 2 : '.$_pekerjaan;

//contoh pemanggilan variabel didalam php
?>
<hr>
<br> Siswa : 1: <?= $namaSiswa ?>
<p>Umur : <?= $umur ?></p>
<p>Luas jari jari diatas adalah <?= $luas ?></p>
