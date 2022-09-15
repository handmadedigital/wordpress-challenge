<?php 

function the_read_time( $content ) {
  $word = str_word_count(strip_tags($content));
  $m = floor($word / 200);
  $m = $m < 1 ? 1 : $m;
  $est = $m . ' minute' . ($m == 1 ? '' : 's');
  echo $est;
}

function get_the_read_time( $content ) {
  $word = str_word_count(strip_tags($content));
  $m = floor($word / 200);
  $m = $m < 1 ? 1 : $m;
  $est = $m . ' minute' . ($m == 1 ? '' : 's');
  return $est;
}