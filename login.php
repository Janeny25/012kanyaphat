<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
<div class="container mt-5">

    <div class="row">
        <div class="col-lg-6 mx-auto box-login">
        <h2 class="mb-4 text-center">LOGIN</h2>
        <form action="check_login.php" method="post">

            <div class="mb-3">
                <label for="email" class="form-label">อีเมล</label>
                <input type="email" class="form-control" name="email" placeholder="อีเมล" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required>
            </div>

            <button type="submit" class="btn btn-jannnn">เข้าสู่ระบบ</button>
            <p class="text-center pt-2">สมัครสมาชิก <a href="#">สร้างบัญชี!!</a></p>
        </form>
        </div>
        
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>