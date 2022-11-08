<?php
$nama="anton";
// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  // memanggil fungsi lain
  echo "Saya berusia ". hitungUmur(1994, 2015) ." tahun<br/>";
  echo "Senang berkenalan dengan anda<br/>";
}

function jumlahkan($angka1, $angka2){
    $hasil = $angka1 + $angka2;
    return $hasil;
}

// memanggil fungsi perkenalan
perkenalan("Ardianta");
echo "<hr>";
echo "hasil dari 2 + 3 = ". jumlahkan(2,3) . $nama;
?>