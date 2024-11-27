<?php
// เริ่มต้นเซสชัน
session_start();

// ทำลายเซสชันทั้งหมด
session_unset();
session_destroy();

// เปลี่ยนเส้นทางไปยังหน้าหลักหรือหน้าล็อกอินหลังจากออกจากระบบ
header("Location: index.php");
exit();
?>
