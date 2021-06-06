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
    <h1> Enter the Details to Update  </h1>
    <?php
    include 'db.php';
    $id= $_GET['id'];
    $sql = " SELECT * FROM name WHERE id = $id ;   " ;
    $result = mysqli_query( $conn, $sql); 
    if($result){
        $row = mysqli_fetch_assoc($result);
        $contactname = $row['name'];
        $contactemail = $row['email'];
        $contactphone   = $row['phone'];    
    }
    ?>
    <form method="post" action="updateaction.php">
        Name : <br> <input type="text" name="name" id="name" value="<?php global $contactname; echo $contactname ?>" required> <br>
        Email: <br><input type="text" name="email" id="email" value="<?php global $contactemail; echo $contactemail ?>" required><br>
        Phone Number : <br> <input type="text" name="pnum" value="<?php global $contactphone; echo $contactphone ?>" required> <br>
        <input type="hidden" name="id" id="id" value="<?php global $id ; echo $id ?>" required> <br>
        Gender : <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
        <input type="radio" name="gender" value="others"> Others 
        <br>
        <input type="submit" value="Update">
    </form>   
</body>
</html>