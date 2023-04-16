<?php
    $user_id =$_POST['user_id'];
    $password =$_POST['password'];

    $conn = new mysqli('localhost','root','','login_sample_db');
    if($conn->connect_error){
        die("Failed to connect : ".$conn->connect_error);
    }else{
        $stmt = $conn->prepare("select * from users where user_id = ?");
        $stmt->bind_param("s",$user_id);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows>0){

            $data=$stmt_result->fetch_assoc();
            if($data['password'] == $password){
                echo "Successfully Login";
            }else{
                header('Location:index.php');
            }
        }
        else{
            header('Location:index.php');
        }
    }
?>
