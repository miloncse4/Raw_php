<!DOCTYPE html>
<html>
<head>
	<title>Login Project</title>
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
        $errname= $erremail = $errwebsite= $errmessag= $errgender= 0;
        ?>
		<form method="post" action="valid.php">
        <table>
            <tr>
                <th>Login Form</th>
            </tr><br>
            <tr>
                <td>
                <label>Name : </label>
                <input type="text" name="name" />
                </td>    
            </tr>

            <tr>
                <td>
                <label>Email : </label>
                <input type="text" name="email"/>
                </td>    
            </tr>

            <tr>
                <td>
                <label>Website :</label> 
                <input type="text" name="website"/>
            </tr>

            <tr>
                <td>
                <label>Message :</label> <br>
                <textarea rows="2" name="message"></textarea>
                </td>    
            </tr>

            <tr>
                <td>
                <label>Gender : </label>
                <input type="radio" name="gender" value="Male">Male
                <input type="radio" name="gender" value="Female">Female
                </td>
            </tr>

            <tr>
                <td>
                    <input type="Submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
        </form>
	</section>
	<section class="footer">
		<h2><?php echo"Milon CSE"; ?></h2>
	</section>
</div>
</body>
</html>