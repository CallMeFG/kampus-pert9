<?php
    $namaDepan = 'fathur';
    $namaBelakang = 'rizky';
    $tahunLahir = 2006;
    $tahunSekarang = 2025;
    $namaBuah = ['nanas','mangga','alpukat'];
    //
    echo 'nama lengkap : ' . $namaDepan . ' '  . $namaBelakang . "<br/>";
    echo 'buah kesukaan : '. $namaBuah[2] . '<br/>';
    
    // foreach ($namaBuah as $buah ){
    //     echo $buah . ", ";
    // }
    echo 'Daftar Buah : ';
    echo '<ol>';
    foreach ($namaBuah as $buah ){
        echo "<li> " . $buah . "</li>";
    }
    echo '</ol>';
    echo 'umur : '. $tahunSekarang-$tahunLahir . '<br>';
    echo 'waktu saat ini : '. date('l, d-m-Y');
    //
    
?>