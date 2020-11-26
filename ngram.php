<?php

function split_nth(String $text, String $delimiter, Int $n)
{
  return array_map(function($val) use ($delimiter) {
      return implode($delimiter, $val);
  }, array_chunk(explode($delimiter, $text), $n));
}

function unigram(String $text)
{
  return implode(split_nth($text, ' ', 1), ', ');
}


function bigram(String $text)
{
  return implode(split_nth($text, ' ', 2), ', ');
}


function trigram(String $text)
{
  return implode(split_nth($text, ' ', 3), ', ');
}

$test = 'Jakarta adalah ibukota negara Republik Indonesia';

echo 'Unigram : ';
print_r(unigram("$test"));
echo '<br>Bigram : ';
print_r(bigram("$test"));
echo '<br>Trigram : ';
print_r(trigram("$test"));

?>