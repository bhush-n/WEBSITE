<?php

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$phone = $_POST['phone'];
$password = $_POST['password'];

// Database Connection
$conn = new mysqli('localhost', 'root', '' , 'blog');
if($conn->connect_error){
    die('Connection Failed :' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into register(fullname, username, email, phone, password)
     values(?,?,?,?,?)");
     $stmt->bind_param("sssis",$fullname,$username,$email,$phone,$password);
     $stmt->execute();
     echo "Registered Successfully !!..";
     $stmt->close();
     $conn->close();
}


?>