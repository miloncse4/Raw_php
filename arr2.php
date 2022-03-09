<?php
//index Array
/*
$x = array(1,2,3,);
echo $x[1];*/

//Multidiamantional Array
    /*$array = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9),
        49,
        array(11,1,2),
        5
    );

    foreach($array as $val){
        if(!is_array($val)){
            print_r($val);
            echo "<br>";
        }   
    }*/

//Asocative Array 
    $y = array(
        "Lotion" => "Ponds",
        "Lipe care" => "Merial",
        "Kids" => "Additas",
    );

    foreach($y as $key => $value){
        echo"Your Product Name is : ".$key." And Brand are - ".$value."<br>";
    }

?>