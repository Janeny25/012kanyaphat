<?php

    session_start();
    include('include/include_db_oo.php');

    $response = [];

    if (!isset($_SESSION['users_id'])) {
        header('Location: login.php');
        exit();
    }
    
    $user_id = $_SESSION['users_id'];
    $users_name = $_POST['users_name'];
    $users_lastname = $_POST['users_lastname'];
    $users_mail = $_POST['users_mail'];
    $users_phone = $_POST['users_phone'];
    $users_add = $_POST['users_add'];
    $users_code = $_POST['users_code'];



    $sql = "UPDATE users SET users_name = '$users_name', users_lastname = '$users_lastname', users_mail = '$users_mail', users_phone = '$users_phone', users_add = '$users_add', users_code = '$users_code' WHERE users_id = $user_id";
    $result = $conn->query($sql);

    if ($result) {
        $response['status'] = 'success';
        $response['message'] = 'Update profile success';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Update profile failed';
    }


    echo json_encode($response);








?>