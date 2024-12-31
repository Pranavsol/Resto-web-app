<?php
include 'database.php';

    if(isset($_POST['Productname']) && isset($_POST['Productstatus']) && isset($_POST['Price']) && isset($_POST['Cataegoryname']))
    {
        $Productname=$_POST['Productname'];
        $Productstatus=$_POST['Productstatus'];
        $Price=$_POST['Price'];
        $Cataegoryname=$_POST['Cataegoryname'];
       
          $sql = "INSERT INTO product ( Product_name, Product_status, Price, category_name) VALUES ('$Productname', '$Productstatus', '$Price', '$Cataegoryname')";
        $result=mysqli_query($pranav,$sql) or die(mysqli_error($pranav));

        if($result==true)
        {
            header('Location: product.html');
        }
        else{
            echo '<h2> Sorry,We are fail to create a new user!</h2>';
        }

    }

    else{
        echo 'Post data not found';
    }

?>