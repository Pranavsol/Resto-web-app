<?php
    include 'database.php';

    if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['phoneno']) && isset($_POST['password']) && isset($_POST['retypepass']) && isset($_POST['gender']))
    {
        $fname=$_POST['fullname'];
        $email=$_POST['email'];
        $phoneno=$_POST['phoneno'];
        $password=$_POST['password'];
        $retypepass=$_POST['retypepass'];
        $gender=$_POST['gender'];


    }

    $sql = "INSERT INTO  register (FullName, Email, PhoneNo, Password, ConfirmPass, Gender) VALUES ('$fname', '$email', ' $phoneno', '$password', '$retypepass', '$gender')";
    $result=mysqli_query($pranav,$sql) or die(mysqli_error($pranav));

    if($result==true)
    {
        header('Location: loginpage.html');
    }
    else{
        echo '<h2> Sorry,We are fail to create a new user!</h2>';
    }
?>