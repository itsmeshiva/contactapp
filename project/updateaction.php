<?php
include 'db.php';
$id =$_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone =$_POST['pnum'];
$sql = " UPDATE name SET name='$name',email='$email',phone ='$phone' WHERE id='$id' ;";
$result = mysqli_query( $conn , $sql );
if($result) {
    header('location:index.php');
}
?>