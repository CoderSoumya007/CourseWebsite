<?php
$server="localhost";
$username="root";
$password="";

$conn=mysqli_connect($server,$username,$password);
if($conn){
    echo "Successfully connected to the database";
}else{
    die("connection to database failed");
}

$name=$_POST['username'];
$gender=$_POST['gender'];
$email=$_POST['emailid'];
$pass=$_POST['password'];
$course=$_POST['registeredcourse'];

$sql="INSERT INTO `courses`.`registeredusers` (`Name`,`Gender`,`Email`,`Password`,`Course`,`Date`) values ('$name','$gender','$email','$pass','$course',current_timestamp() )";

if($conn->query($sql)==true){
    echo "Succussfully inserted";
}else{
    echo "ERROR: $sql <br> $conn->error";
}

$conn->close();
?>