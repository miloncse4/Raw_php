<!DOCTYPE html>
<html>
<head>
	<title>request</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<input type="text" name="fullname">
		<input type="submit" value="submit">
	</form>
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$name = $_POST['fullname'];
			if(empty($name)){
				echo"Empty name";
			}
			else{
				echo"Puron kirito namen :".$name;
			}
		}
	?>
</body>
</html>