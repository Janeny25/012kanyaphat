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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/home.css">
</head>

<body>

    <div class="d-flex">
        <nav class="sidebar flex-shrink-0 p-3">
            <h4 class="text-center text-dark">KANYAPHAT</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa-regular fa-user"></i> <?php echo $user["users_name"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
        </nav>

        <div class="content">
            <div class="row mb-4">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Profile</h4>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mx-auto text-center">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fa-solid fa-user-tie fa-2xl"></i></h5>
                                    <p class="card-text"><?php echo $user["users_name"] ?></p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fa-solid fa-envelope fa-2xl"></i></h5>
                                    <p class="card-text">ชื่อจริง-นามสกุล: <?php echo $user["users_name"] ?> <?php echo $user["users_lastname"] ?></p>
                                    <p class="card-text">อีเมล: <?php echo $user["users_mail"] ?></p>
                                    <p class="card-text">เบอร์โทรศัพท์: <?php echo $user["users_phone"] ?></p>
                                    <p class="card-text">ที่อยู่: <?php echo $user["users_add"] ?></p>
                                    <p class="card-text">รหัสนักศึกษา: <?php echo $user["users_code"] ?></p>
                                    <p class="card-text">วันที่สมัคร: <?php echo $user["users_regis"] ?></p>
                                    <a class="btn btn-warning btn-sm " href="#" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal">EDIT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/update_profile.js"></script>
</body>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="edit_profile.php" method="post">
            <div class="mb-3">
                <label for="users_name" class="form-label">ชื่อจริง</label>
                <input type="text" class="form-control" id="users_name" name="users_name" value="<?php echo $user["users_name"] ?>">
            </div>
            <div class="mb-3">
                <label for="users_lastname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" id="users_lastname" name="users_lastname" value="<?php echo $user["users_lastname"] ?>">
            </div>
            <div class="mb-3">
                <label for="users_mail" class="form-label">อีเมล</label>
                <input type="email" class="form-control" id="users_mail" name="users_mail" value="<?php echo $user["users_mail"] ?>">
            </div>
            <div class="mb-3">
                <label for="users_phone" class="form-label">เบอร์โทรศัพท์</label>
                <input type="text" class="form-control" id="users_phone" name="users_phone" value="<?php echo $user["users_phone"] ?>">
            </div>
            <div class="mb-3">
                <label for="users_add" class="form-label">ที่อยู่</label>
                <input type="text" class="form-control" id="users_add" name="users_add" value="<?php echo $user["users_add"] ?>">
            </div>
            <div class="mb-3">
                <label for="users_code" class="form-label">รหัสนักศึกษา</label>
                <input type="text" class="form-control" id="users_code" name="users_code" value="<?php echo $user["users_code"] ?>">
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-warning" id="submit-update" data-bs-dismiss="modal">Save changes</button>
      </div>
    </div>
  </div>
</div>

</html>
