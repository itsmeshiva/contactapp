<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Project</title>
</head>
<body>
    <h1> Shiva Bhandari Contact Application </h1>
    <form method="post" action="action.php">
        Name : <br> <input type="text" name="name" required> <br>
        Email: <br><input type="text" name="email" required><br>
        Phone Number : <br> <input type="text" name="pnum" required> <br>
        <input type="submit" value="save">
    </form>
    <hr>
    <h1> List of Clients Details </h1>
    <table>
    <tr>
    <th> Id</th>
    <th> Name</th>
    <th> Email</th>
    <th> Phone </th>
    <th>Action</th>
    </tr>
    <?php
        include 'db.php';
        $sql = "SELECT * FROM name ;" ;
        $result = mysqli_query($conn,$sql);
        if($result) {
            while($row=mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $pnum = $row['phone'];
            ?>    
            <tr>
                <td> <?php echo $id ?></td>
                <td> <?php echo $name ?> </td>
                <td> <?php echo $email ?> </td>
                <td> <?php echo $pnum ?></td>
                <td><a href="delete.php?id=<?php echo $id ?>">Delete</a>
                    <a href="update.php?id=<?php echo $id ?>">Update</a>
                </td>    
            </tr>  
            <?php  
             
            }
        }
        
    ?>
    </table>
</body>
</html>