<?php
    $string = $_GET['input'];

    function count_capitals($s) {
        $kecil = strlen(preg_replace('![^a-z]+!', '', $s));

        echo "'$s' mengandung $kecil buah huruf kecil.";
    }

    
    count_capitals($string);
?>