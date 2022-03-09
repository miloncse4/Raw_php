<!DOCTYPE html>
<html>
<head>
	<title>Demo Project</title>
	<style type="text/css">
		.phpcoding{width:920px; margin: 0 auto; background: #ddd; padding:10px; border:#444 2px solid;}
		.header, .footer{background:#444; color:#fff; text-align:center; padding: 20px;}
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
		<?php
	$sabbir = array(120,150,3654);
    $mortaza = array(150,175,4256);

   $raw = array(
    array(120,150,3654),
    array(150,175,4256)
   );

   $length = count($raw);
   //echo $length;

   for($row=0; $row<$length; $row++){
       echo "Row number is :".$row."<br>"."<br>";
       for($col=0; $col<=2; $col++){
           echo "Column number is : ".$raw[$row][$col]."<br>"."<br>";
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