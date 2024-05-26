<?php
// Deret angka
$array = array(790, 483, 281, 224, 483, 60, 698, 483, 790, 168);

// Inisialisasi array kosong untuk menyimpan angka yang muncul lebih dari 1 kali
$angkaDuplikat = array();

// Hitung frekuensi kemunculan setiap angka
foreach ($array as $angka) {    
    if (isset($angkaDuplikat[$angka])) {
        $angkaDuplikat[$angka]++;
    } else {
        $angkaDuplikat[$angka] = 1;
    }
}

// Tampilkan angka yang muncul lebih dari 1 kali
foreach ($angkaDuplikat as $angka => $frekuensi) {
    if ($frekuensi > 1) {
        echo "$angka muncul $frekuensi kali\n";
    }
}

?>

