<?php
include 'database.php';

    if(isset($_POST['Categoryname']) && isset($_POST['cataegory_status']) && isset($_POST['short_dis']))
    {
        $categoryname=$_POST['Categoryname'];
        $cataegory_status=$_POST['cataegory_status'];
        $short_dis=$_POST['short_dis'];
       
    }

        $sql = "INSERT INTO cataegory (	category_name, category_status, short_description) VALUES ('$categoryname', '$cataegory_status', '$short_dis')";
        $result=mysqli_query($pranav,$sql) or die(mysqli_error($pranav));

        if($result==true)
        {
            header('Location: cataegory.html');
        }
        else{
            echo '<h2> Sorry,We are fail to create a new user!</h2>';
        }
?>