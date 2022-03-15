<?php

// Membuat Fungsi
//function perkenalan(){
 //echo "Perkenalkan Nama saya : Aulia";
//}
 //perkenalan();
// echo "<br/>";

 // Fungsi dengan Parameter
 //function perkenalan($nama){
     //echo "Nama Saya Adalah: ".$nama;
 //}
 //perkenalan("Auliaa");
 //echo "<br/>";

// Parameter Default
function perkenalan($nama = "Aulia Rohmatul Hasanah"){
    echo "Nama : ".$nama;
}

perkenalan("Aulia");
echo "<br/>";

// Fungsi return
function luaspersegi($sisi){
    $rumus = $sisi * $sisi;
    return $rumus;

}

echo "Luasnya : ".luaspersegi(10);
echo "<br/>";

// Fungsi Hitung Umur
function hitungumur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;

}

echo "Umur saya adalah : ".hitungumur(2000,2022);
echo "<br/>";

// Fungsi Hitung Luas
function luaslingkaran($jari){
    $phi = 3.14;
    $rumus = $phi * $jari * $jari;
    return $rumus;

}

echo "Luas Lingkaran : ".luaslingkaran(7);
echo "<br/>";
echo "Luas Lingkaran : ".luaslingkaran(14);

?>