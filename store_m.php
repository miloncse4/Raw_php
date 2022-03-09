<html>
    <head>
        <title>Table data</title>
        <style>
            table, tr, td{
                border:2px solid;
                border-collapse:collapse;
                padding: 2px;
            }
            table{
                width:100%;
            }
        </style>
    </head>
    <body>
    <?php
    $mobile = array(
        array("Mi",450,300),
        array("Nokia",350,150),
        array("Realmi",600,500),
        array("Huwaiy",700,400)
    );
    echo "<table><tr><th>মোবাইলের নাম</th><th>স্টকের পরিমান</th><th>বিক্রয়ের পরিমান</th></tr>";
for ($row=0; $row < 4 ; $row++) {
	echo "<tr>";
 	for ($col=0; $col < 3 ; $col++) {
 		echo "<td>". $mobile[$row][$col] ."</td>";
 	}
 	echo "</tr>";
 }
 echo "</table>";
?>
    </body>
</html>
