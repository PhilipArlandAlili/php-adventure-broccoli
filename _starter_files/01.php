<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->
<?php
   function sum_of_digits($num1){

      $sum = 0;
      for ($i = 0; $i < strlen($num1); $i++){
         $sum += $num1[$i];
      }
      return $sum;
   }
   $num1 = "11";

   print_r("The sum of digits is ");
   echo sum_of_digits($num1);
?>