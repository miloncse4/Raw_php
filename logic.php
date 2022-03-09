<?php
//Male marti Age
    $age = 21;
    $gender = "male";

    if($age >= 21){
        if($age >= 21 && $gender == "male"){
            echo"Marit permission granted";
            echo"<br>";
        }
        else{
            echo"permission not granted marit";
            echo"<br>";
        }
    }
    else{
        echo"No permission";
    }

    //Female Marit age
    $age2 = 18;
    $gen = "female";

    if($age2 >= 18){
        if($age2 >= 18 && $gen == "female"){
            echo"female Marit permission granted";          
        }
        else{
            echo"female permission not granted marit";
        }
    }
    else{
        echo"Not permission";
    }
?>