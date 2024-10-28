<?php

session_start();

include('include/include_db_oo.php');

if (!isset($_SESSION['users_id'])) {
    header('Location: login.php');
    exit();
}


$user_id = $_SESSION['users_id'];


$sql = "SELECT * FROM users WHERE users_id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    header('Location: login.php');
    exit();
}




?>


<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMp5b6hP8Q2e6y3g5O8f8fU9qPwh4V9HzD81w5m" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>

    <div class="d-flex">
        <nav class="sidebar flex-shrink-0 p-3">
            <h4 class="text-white text-center">Home</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-users"></i> <?php echo $user["users_name"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
        </nav>

        <div class="content">

            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 1</h5>
                            <p class="card-text">คำถาม 1</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ตัวเลือก 1</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">ตัวเลือก 2</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">ตัวเลือก 3</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">ตัวเลือก 4</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
