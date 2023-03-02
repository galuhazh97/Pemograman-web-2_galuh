<?php 
$nama =$_POST["customer"];
$produk =$_POST["produk"];
$jumlah =$_POST["jumlah"];

if($produk == "Kulkas"){
    $harga = 4000000  *$jumlah;
}elseif ($produk == "TV") {
    $harga = 3000000 *$jumlah;
}elseif ($produk == "Mesin Cuci"){
    $harga = 5000000 *$jumlah;
}

//GWEH DH MUAKKKK
?>
