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
    <link rel="stylesheet" href="assets/css/quiz.css">
</head>

<body>

    <div class="d-flex">

        <div class="content">

            <div class="row">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 1</h5>
                            <p class="card-text">คุณทานอาหารไทยบ่อยแค่ไหนในแต่ละสัปดาห์?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ทุกวัน</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">3-4 ครั้งต่อสัปดาห์</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">1-2 ครั้งต่อสัปดาห์</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q1" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">นานๆ ครั้ง</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 2</h5>
                            <p class="card-text">คุณมักจะทานข้าวสวยหรือข้าวเหนียวมากกว่ากัน?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ทานข้าวสวยเป็นประจำ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">ทานข้าวเหนียวเป็นประจำ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">สลับกันทั้งข้าวสวยและข้าวเหนียว</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q2" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">ทานข้าวน้อยมาก</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 3</h5>
                            <p class="card-text">คุณชอบทานอาหารแบบไหนมากที่สุด?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">รสจัดจ้าน เช่น เผ็ด เปรี้ยว</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">รสหวาน</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">รสเค็มหรือกลมกล่อม</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q3" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">รสจืดหรือไม่เผ็ด</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 4</h5>
                            <p class="card-text">คุณชอบทานน้ำพริกกับผักแนมไหม?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ชอบมาก ทานเกือบทุกมื้อ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">ทานบางครั้ง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">ทานน้อยมาก</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q4" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">ไม่ชอบเลย</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 5</h5>
                            <p class="card-text">คุณมักทานอาหารประเภทต้ม ย่าง หรือทอดมากกว่ากัน?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">อาหารต้ม</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">อาหารย่าง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">อาหารทอด</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q5" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">ทานทุกประเภทอย่างสมดุล</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 6</h5>
                            <p class="card-text">คุณมักทานอาหารไทยที่ใช้กะทิบ่อยแค่ไหน?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ทุกวัน</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">หลายครั้งต่อสัปดาห์</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">เดือนละครั้ง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q6" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">น้อยมากหรือไม่ทานเลย</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 7</h5>
                            <p class="card-text">คุณชอบทานขนมไทยไหม?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ชอบมาก ทานบ่อย</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">ทานบ้างบางครั้ง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">นาน ๆ ทานที</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q7" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">ไม่ค่อยชอบ</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 8</h5>
                            <p class="card-text">คุณมักทานผลไม้หลังอาหารบ่อยแค่ไหน?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ทุกมื้อ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">บ่อยครั้ง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">บางครั้ง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q8" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">ไม่ค่อยทาน</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 9</h5>
                            <p class="card-text">คุณชอบทานก๋วยเตี๋ยวประเภทไหนมากที่สุด?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ก๋วยเตี๋ยวน้ำใส</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">ก๋วยเตี๋ยวน้ำตก</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">ก๋วยเตี๋ยวต้มยำ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q9" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">ก๋วยเตี๋ยวแห้ง</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-lg-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ข้อที่ 10</h5>
                            <p class="card-text">คุณเลือกทานอาหารตามภูมิภาคไหนในประเทศไทยบ่อยที่สุด?</p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="a" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">ภาคกลาง</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="b" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">ภาคอีสาน</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="c" id="flexRadioDefault3">
                                <label class="form-check-label" for="flexRadioDefault3">ภาคเหนือ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="q10" value="d" id="flexRadioDefault4">
                                <label class="form-check-label" for="flexRadioDefault4">ภาคใต้</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-1 mx-auto">
                    <button type="submit" class="btn mb-3 mt-3 btn-answer">ส่งคำตอบ</button>   
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
