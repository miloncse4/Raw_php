<?php
  /*  $cars = array("a","b","c");
       
    function counter($data){
        $i=0;
        while($data[$i]){ 
            $i++;
        }
        echo "My create counter counter value is work - ".$i;     
    }
    counter($cars);*/

    $vawel=array('a','e','i','o','u');
 switch (in_array('a',$vawel,TRUE)) {
     case $vawel:
         echo "this is vawel: <br>";
         break;
    
     default:
         echo"this is consonant";

     }

    /*function ny_fun(){

        $cars=array('s','b','v','f','L','o');
         return $cars;
    }
    $car=ny_fun();
    print_r( sizeof($car));*/
?>