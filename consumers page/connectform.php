<?php
$name =$_POST['name'];
$email =$_POST['email'];
$jobtitle =$_POST['jobtitle'];
$message =$_POST['message'];

$conn = new mysqli('localhost','root','','form');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}
else{
    //inserting and binding the values
    $stmt = $conn->prepare("insert into registration(name,email,jobtitle,message)values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$jobtitle,$message);    
    $stmt->execute();
    echo "Applied for job successfully";
    
    $stmt->close();
    $conn->close();
}

?>
 <!-- connecting this to database -->

