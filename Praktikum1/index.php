<?php
// ini sebuah komentar
/* ini sebuah komentar untuk komentar panjang */
# ini juga komentar

// echo "Hello world <br>";
// echo 'Hello world <br>';
// print_r("Galuh Azhary <br>");
// var_dump(" STT NF"); //menunjukan tipe data

//membuat variabel user
//variabel adalah sebuah wadah untuk menampung nilai
$nama = "Galuh Azhary";
$umur = 18;
$berat = 43.5;
$mahasiswa = true;

// echo "Hallo, nama saya $nama, ";
// echo "umurku $umur th ";
// echo "dan memiliki berat badan $berat kg";
//membuat variabel sistem
// echo "dokument root " . $_SERVER['DOCUMENT_ROOT'];
// echo "<br>";
// echo "nama file " . $_SERVER['PHP_SELF']; 
//membuat variabel konstanta
// define('PHI',3.14);
// $jari = 8;
// $luas = PHI * $jari *$jari;
// $keliling = 2 * PHI * $jari;

// echo "Luas lingkaran dengan jari-jari $jari cm = $luas cm" ;
// echo '<br>';
// echo "keliling lingkaran = $keliling cm";
//membuat array (dapat menampung banyak nilai)
$programs = ["php", "javascript","html", "css"];
echo $programs[0];
echo "jumlah data sebanyak" . count($programs);
?>