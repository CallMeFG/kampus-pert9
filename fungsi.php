<?php 
    function tambah($a, $b){
        return $a + $b;
    }
    function kurang($a, $b){
        return $a - $b;
    }
    function kali($a, $b){
        return $a * $b;
    }
    function bagi($a, $b){
        return $a / $b;
    }
    function modulus($a, $b){
        return $a % $b;
    }
    echo "<h1>Function :</h1>"; 
    $a = 10;
    $b = 5;
    echo "<h2>Tambah</h2>";
    echo "<p>Hasil dari 10 + 5 = " . tambah($a, $b) . "</p>";
    echo "<h2>Kurang</h2>";
    echo "<p>Hasil dari 10 - 5 = " . kurang($a, $b) . "</p>";
    echo "<h2>Kali</h2>";
    echo "<p>Hasil dari 10 * 5 = " . kali($a, $b) . "</p>";
    echo "<h2>Bagi</h2>";
    echo "<p>Hasil dari 10 / 5 = " . bagi($a, $b) . "</p>";
    echo "<h2>Modulus</h2>";
    echo "<p>Hasil dari 10 % 5 = " . modulus($a, $b) . "</p>";
?>