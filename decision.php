<?php
    $nilai = 70;

    if ($nilai > 80) {
        echo 'nilai huruf A';
    } else if($nilai>76){
        echo 'nilai huruf AB';
    } else if($nilai>70){
        echo 'nilai huruf B';
    } elseif($nilai>51){
        echo 'nilai huruf C';
    } else{
        echo 'nilai huruf F';
    }

    switch ($nilai) {
        case $nilai > 80:
            echo 'nilai huruf A';
            break;
        
        default:
            # code...
            break;
    }
?>