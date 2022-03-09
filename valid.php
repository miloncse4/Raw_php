<?php
	$nam = $email = $website = $message = $gender =  0;
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
    	 $nam = validate($_POST["name"]);
    	 $email = validate($_POST["email"]);
    	 $website = validate($_POST["website"]);
    	 $message = validate($_POST["message"]);
    	 $gender = validate($_POST["gender"]);

		 	echo "Name : ".$nam."<br>";
			echo "E-mail : ".$email."<br>";
			echo "Website : ".$website."<br>";
			echo "Message : ".$message."<br>";
			echo "Gender : ".$gender;
			
		 }
    

    function validate($data){
    	$da = trim($data);
    	$da = stripcslashes($data);
    	$da = htmlspecialchars($data);
    	return $da;
    }

    

?>