<?php
    /*$file = fopen("myfile.txt","w");
    $a = "Creative it institute";
    fwrite($file,$a);
    $text = "Uttra Brance";
    fwrite($file,$text);
    fclose($file);

    $a = array("red","green");
    $b = array("violet","yellow");
    $c = array("orange","navy");

    print_r(array_replace($a,$b,$c))."<br>";

    $c = array("orange","navy");

    echo"<br>";
    $number = range(0,10);
    print_r($number);*/

   $file = fopen("myfile.txt","w");
   $fa="Creative it institute \n";
   fwrite($file,$fa);
   $b="Brightskill.com";
   fwrite($file,$b);
   fclose($file);
?>