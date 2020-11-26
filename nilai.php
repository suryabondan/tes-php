<?php 
    $nilai = "72 65 73 78 75 74 90 81 87 65 55 69 72 78 79 91 100 40 67 77 86";
    $score = explode(' ',$nilai);

    $jumlah_nilai = array_sum($score);
    $jumlah_data = count($score);

    $mean = $jumlah_nilai / $jumlah_data;

    echo 'nilai rata-rata = '.round($mean).'<br>';
    echo 'nilai tertinggi = '.max($score).'<br>';
    echo 'nilai terendah  = '.min($score);
?>