<?php
 include 'database.php';
       
        if(isset($_POST['user']) && isset($_POST['password']))
        {
            $user=$_POST['user'];
            $pswd2=$_POST['password'];           

            $sql="SELECT fullname,password FROM register ORDER BY FullName";
            $result=mysqli_query($pranav,$sql) or die(mysqli_error($pranav));    
            
                if($result==true)
            {
                $row1=mysqli_fetch_assoc($result);
                $usrname=$row1['fullname'];
                $pswd1=$row1['password']; 
                
                echo $usrname;
                echo $pswd1;

                if($usrname==$user && $pswd1==$pswd2){
                    header('Location: dashbord.php');
                }
                else{
                    echo 'Wrong username or password';
                }
            }
        }      
?>