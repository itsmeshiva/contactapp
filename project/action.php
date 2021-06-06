<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Project Action </title>
</head>
<body>
<?php $name=$_POST['name'];
$pnum=$_POST['pnum'];
$email=$_POST['email'];
$gender=$_POST['gender'];
include 'db.php';
$sql = "INSERT INTO name(name,email,phone) VALUES ('$name','$email','$pnum');";
$result = mysqli_query($conn,$sql);
if($result) {
    header('location:index.php');
}
?>

<h1> Your Personal Details : </h1>
<br>
<h2>Name : </h2> 
<?php 
    echo $name ; 
?>
<h2>Email</h2>  
<?php 
     echo $pnum ; 
?>
<h2>Your Phone number </h2>        
<?php         
        echo $email;
?> 
<h2> Gender </h2>        
<?php         
        echo $gender;
?>            
</body>
</html>