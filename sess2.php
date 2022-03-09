<?php session_start();?>
<?php
    
    echo "Name is ".$_SESSION['username']."<br>";
    echo "Running years ".$_SESSION['password'];
    session_destroy();
?>
// $insert_query = "INSERT INTO users(name,email,mobile,password) VALUES ('$name','$email','$mobile','$password')";  
            // mysqli_query($db_conect,$insert_query);