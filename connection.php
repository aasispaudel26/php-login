<?php
 $serverName = "localhost";
 $userName = "root";
 $password = "";
 $database = "web";

 $conn = mysqli_connect( $serverName, $userName, $password, $database);
 // check connection

 if ( ! $conn){
    die ("connection failed". mysqli_connect_error());


 }
 //echo "connected sucessfully";
 ?>
