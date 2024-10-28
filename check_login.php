<?php

session_start();

include "include/include_db_oo.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE users_mail = '$email'";
$result = $conn->query($sql);

if($result->num_rows > 0){

    if($row = $result->fetch_assoc()){
        if(password_verify($password, $row['users_password'])){
            
            $_SESSION['users_id'] = $row['users_id'];

            echo "Login Success";
            header("Location: index.php");

        }
        else{
            echo "Password Incorrect";
        }
    }

}


?>