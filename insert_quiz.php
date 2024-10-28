<?php

    session_start();
    include 'include/include_db_oo.php';

    //ตำ
    //ปิ้งย่าง
    //ต้ม
    //ทอด
    $user_id = $_SESSION['users_id'];

    $quiz_1 = $_POST['choices'][0];
    $quiz_2 = $_POST['choices'][1];
    $quiz_3 = $_POST['choices'][2];
    $quiz_4 = $_POST['choices'][3];
    $quiz_5 = $_POST['choices'][4];
    $quiz_6 = $_POST['choices'][5];
    $quiz_7 = $_POST['choices'][6];
    $quiz_8 = $_POST['choices'][7];
    $quiz_9 = $_POST['choices'][8];
    $quiz_10 = $_POST['choices'][9];

    $sql = "INSERT INTO quiz (quiz_user_id, quiz_1, quiz_2, quiz_3, quiz_4, quiz_5, quiz_6, quiz_7, quiz_8, quiz_9, quiz_10) VALUES ($user_id, '$quiz_1', '$quiz_2', '$quiz_3', '$quiz_4', '$quiz_5', '$quiz_6', '$quiz_7', '$quiz_8', '$quiz_9', '$quiz_10')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    header('Location: home.php');





?>