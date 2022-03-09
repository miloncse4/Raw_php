<?php
    if(isset($_FILES['image'])){
        $filename = $_FILES['image']['name'];
        $filetemp = $_FILES['image']['tmp_name'];
        move_uploaded_file($filetemp,'images/'.$filename);
        echo"Image Upload Successfuly..";
    }
?>
<html>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]?>" enctype="multipart/form-data">
        <table>
            <input type="file" name="image"/>
            <input type="submit" value="submit"/>
        </table>
    </form>
</html>