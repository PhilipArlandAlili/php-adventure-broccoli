<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->

<?php

function numwords($strg) {

      $strg = preg_replace('/\s+/', ' ', trim($strg));
      $words = explode(" ", $strg);
      return count($words);
}
  
$str = "the count words php adventure brocolli";

$count = numwords($str);
  
echo $count; 

?>