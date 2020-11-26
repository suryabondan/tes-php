<?php
$arr = [['f', 'g', 'h', 'i'],['j', 'k', 'p', 'q'],['r', 's', 't', 'u']];

$tek = 'fghp';

function array_flatten($array) { 
    if (!is_array($array)) { 
        return FALSE; 
    } 
    $result = array(); 
    foreach ($array as $key => $value) { 
        if (is_array($value)) { 
            $result = array_merge($result, array_flatten($value)); 
        } else { 
            $result[$key] = $value; 
        } 
    } 
    return $result; 
}

// print_r(array_flatten($arr));

$cari = str_split($tek);

function cari($needles, $haystack) {
		return empty(array_diff($needles, array_flatten($haystack)));
    
 }

echo cari($cari,$arr);
?>