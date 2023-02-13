<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->

 <?php
   function digits($num1){

      $sum = 0;
      for ($i = 0; $i < strlen ($num1); $i++){
         $sum += $num1[$i];
      }
      return $sum;
   }
   $num1 = "99";

   echo ("The sum of the input digits is: ");
   echo digits($num1);
?>