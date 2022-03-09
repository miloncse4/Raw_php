<?php
session_start();
?>
<?php
    $_SESSION['username'] = "Akhi Moni";
    $_SESSION['password'] ='2022';

    echo "Name is ".$_SESSION['username']."<br>";
    session_unset();
    echo "Running years ".$_SESSION['password'];
?>