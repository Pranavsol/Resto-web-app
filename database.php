<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "monginis";

    $pranav = mysqli_connect($servername, $username, $password, $dbname);

    if ($pranav->connect_error) {
        die("Connection failed". $pranav->connect_error);
    }
?>