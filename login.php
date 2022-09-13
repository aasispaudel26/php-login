<?php
include 'connection.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result =  mysqli_query($conn, $query);
    if(mysqli_num_rows($result)===1){
        $row = mysqli_fetch_assoc($result);
        if($row['email']===$email && $row['password']=== $password){
            header("location: index.php");
        }
        else{
            echo "username and password is wrong";
        }
    }
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <h1> <center>Login</center></h1>

<form action="login.php" method = "POST">
        
         <center><label for="User name/Email">User name/Email</label><br>
            <input type="email" name="email" id=""> <br>
            <br>
        </center>
        
        

        <center>
            <label for="Password">Password</label><br>
        <input type="password" name="password" id=""> <br><br>


        <input type="submit" name="login" value="login">
        <br><br>
        <label for="">Don't have an Account?</label>
     <a href="signup.php">Signup</a>
        

        </center>





    </form>
    
</body>
</html>