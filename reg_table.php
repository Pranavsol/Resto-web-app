<?php
    include 'database.php';

    $sql="SELECT * FROM register ORDER BY FullName";
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
            <td>Full Name:</td>
            <td>Email</td>
            <td>Phone Number</td>
            <td>password</td>
            <td>gender</td>
        </tr>
        <?php
        if($result==true)
        {
            $i=0;
            while($row=mysqli_fetch_assoc($result)){
                $i++;
                $name=$row['FullName'];
                $email=$row['Email'];
                $contact=$row['PhoneNo'];
                $psw=$row['Password'];
                $gnd=$row['Gender'];
                
                echo '<tr>';
                echo '<td>'.$i.'</td>';
                echo '<td>'.$name.'</td>';
                echo '<td>'.$email.'</td>';
                echo '<td>'.$contact.'</td>';
                echo '<td>'.$psw.'</td>';
                echo '<td>'.$gnd.'</td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
</body>
</html>