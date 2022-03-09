<?php
    $marks = 90;

    switch($marks){
        case $marks>90 && $marks<=100:
         echo"You got A+";
         break;

        case $marks>80 && $marks<=90:
         echo "You got A+";
         break;

         case $marks>80 && $marks<=89:
          echo "You got A";
          break;

         case $marks>70 && $marks<=79:
          echo "You got B+";
          break;

        case $marks>60 && $marks<=69:
         echo "You got B";
         break;

         case $marks>55 && $marks<=59:
          echo "You are a fail";
          break;

         default:
         echo"Error..!";
    
    }
?>