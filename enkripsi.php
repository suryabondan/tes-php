<?php

function encrypt_by_charcode(String $text) {
  $ascii_codes = unpack('C*', $text);

  $encoded_arr_text = array_map(function($char_code, $key) {
    return ($key % 2 === 0) ? chr($char_code - $key) : chr($char_code + $key);
  }, $ascii_codes, array_keys($ascii_codes));

  return implode($encoded_arr_text, '');
};

print_r(encrypt_by_charcode('DFHKNQ'));
