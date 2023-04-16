<?php

$user_name =$_POST['user_name'];
$user_id =$_POST['user_id'];
$password =$_POST['password'];

$conn = new mysqli('localhost','root','','login_sample_db');
if ($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into users(user_name,user_id,password) values(?,?,?)");
    $stmt->bind_param("sss",$user_name,$user_id,$password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
header('Location:index.php');
die;

?>
