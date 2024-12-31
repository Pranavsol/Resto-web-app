<?php
include 'database.php';

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
       
    }

        $sql = "INSERT INTO login (user,pswd) VALUES ('$username', '$password')";
        $result=mysqli_query($pranav,$sql) or die(mysqli_error($pranav));

        if($result==true)
        {
            header('Location: logincheck.php');
        }
        else{
            echo '<h2> Sorry,We are fail to create a new user!</h2>';
        }
?>