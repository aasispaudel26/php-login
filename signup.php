<?php
include 'connection.php';
if(isset($_POST['save'])){
    $fullname = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `users` (full_name, email, password) VALUES ('$fullname', '$email', '$password')";
    
    $result = mysqli_query($conn, $query);

    echo "user added sucessfully";
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
<body>
    
    <h1> <center>Sign up</center></h1>
    <form action="signup.php" method = "POST">
        <center><label for="full name">full name</label><br>
            <input type="text" name="fullName" id="">
            
            <br>
            <label for="Email">Email</label><br>
        <input type="email" name="email" id="">
        
         <br><br>

       <label for="Password">Password</label><br>
        <input type="password" name="password" id="">
         <br> <br>
        
        <label for="confirmpassword">confirmpassword</label><br>
        <input type="password" name="confirmpassword" id=""> 
          <br><br>
        
        <input type="submit" name = "save" value="Signup">
        <br><br>
        <label for="">Already have an Account?</label>
     <a href="login.php">login</a>
     </center>
        

    </form>
</body>
</html>