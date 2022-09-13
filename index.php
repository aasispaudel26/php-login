<?php 
include 'connection.php';
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
$i=1;

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
    <h1> User Lists</h1>
    <table border="1">
    <thead>
        <tr>
            <th>S.N</th>
            <th> Full Name</th>
            <th> Email</th>
            <th>status</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php
        while($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td> <?php echo $i++; ?></td>
            <td><?php echo $row['full_name']; ?> </td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
            <a href="edit.php?id=<?php echo $row['id'];?>">
            Edit</a>
            <a href="delete.php?id=<?php echo $row['id'];?>">
            Delete</a>
        
            </td>

        </tr>
        <?php } ?>
    </tbody>

    </table>
    
</body>
</html>