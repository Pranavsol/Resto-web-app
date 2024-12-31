<?php
    include 'database.php';

    $sql="SELECT * FROM login ORDER BY user";
    $result=mysqli_query($pranav,$sql) or die(mysqli_error($pranav));
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>

</head>
<body>
    <table>
        <header>Registration Details</header>
        <tr>
            <td>Sr. No.</td>
            <td>User Name:</td>
            <td>Password:</td>

        </tr>
        <?php
        if($result==true)
        {
            $i=0;
            while($row=mysqli_fetch_assoc($result)){
                $i++;
                $usrname=$row['user'];
                $pswd=$row['pswd'];
                
                echo '<tr>';
                echo '<td>'.$i.'</td>';
                echo '<td>'.$usrname.'</td>';
                echo '<td>'.$pswd.'</td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
</body>
</html>