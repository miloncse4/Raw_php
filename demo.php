<!DOCTYPE html>
<html>
<head>
	<title>Demo Project</title>
	<style type="text/css">
		.phpcoding{width:920px; margin: 0 auto; background:while; padding:10px; border:#444 2px solid;}
		.header, .footer{background:#39FF71; color:red; text-align:center; padding: 20px;}
		.header h2, .footer h2{margin:0;}
		.maincontent{min-height:500px; padding: 20px;}
	</style>
</head>
<body>
<div class="phpcoding">
	<section class="header">
		<h2><?php echo"php code practices"; ?></h2>
	</section>
	<section class="maincontent">
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		Name : 
		<input type="text" name="name">
		<input type="submit" value="submit">
		</form>
		<?php
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$request = $_POST["name"];
			if(empty($request)){
				echo"<span style='color:red;'>Name Field Must Not Be Empty..!!</span>";
			}
			else{
				echo "<span> You Have Submited - ".$request. "</span>";
			}
		}
		?>
	</section>
	<section class="footer">
		<h2><?php echo"Milon CSE"; ?></h2>
	</section>
</div>
</body>
</html>