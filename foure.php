<?php
    $ar = array(
        array(1,2,3,4,5),
        array(12,15,17,20),
        array(9,5,3,6),
        49,
        array(41,2,6,12),
        12,
    );

    foreach($ar as $value){
        if(!is_array($value)){
            print_r($value);
            echo"<br>";
        }
    }
?>