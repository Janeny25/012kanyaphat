<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/regis.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto box-login">
            <h2 class="mb-4 text-center"> Register </h2>
            <form action="save_regis.php" method="post">
                <div class="mb-3">
                    <label for="prefix" class="form-label">คำนำหน้า</label>
                    <select class="form-select" id="prefix" name="prefix" required>
                        <option selected disabled value="">เลือกคำนำหน้า</option>
                        <option value="Mr">นาย</option>
                        <option value="Mrs">นาง</option>
                        <option value="Ms">นางสาว</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="firstName" class="form-label">ชื่อ</label>
                    <input type="text" class="form-control" name="firstName" placeholder="ชื่อ" required>
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label">นามสกุล</label>
                    <input type="text" class="form-control" name="lastName" placeholder="นามสกุล" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">อีเมล</label>
                    <input type="email" class="form-control" name="email" placeholder="อีเมล" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">รหัสผ่าน</label>
                    <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required>
                </div>

                <div class="mb-3">
                    <label for="dob" class="form-label">วันเดือนปีเกิด</label>
                    <input type="date" class="form-control" name="dob" required>
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">เพศ</label>
                    <select class="form-select" name="gender" required>
                        <option selected disabled value="">เลือกเพศ</option>
                        <option value="male">ชาย</option>
                        <option value="female">หญิง</option>
                        <option value="other">อื่นๆ</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="studentId" class="form-label">รหัสนักศึกษา</label>
                    <input type="text" class="form-control" name="studentId" placeholder="รหัสนักศึกษา" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">เบอร์โทรศัพท์</label>
                    <input type="tel" class="form-control" name="phone" placeholder="เบอร์โทรศัพท์" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">ที่อยู่</label>
                    <textarea class="form-control" name="address" rows="3" placeholder="ที่อยู่" required></textarea>
                </div>

                <button type="submit" class="btn mb-3 btn-primary">สมัคร</button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>