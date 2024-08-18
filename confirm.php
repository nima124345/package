<?php
session_start();
require './admin/db_connect.php';;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // รับข้อมูลจากฟอร์ม
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // ตรวจสอบว่าชื่อผู้ใช้หรืออีเมลนี้มีอยู่ในฐานข้อมูลแล้วหรือไม่
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email,$password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $error = 'ชื่อผู้ใช้หรืออีเมลนี้มีอยู่ในระบบแล้ว';
    } else {
        // เข้ารหัสรหัสผ่าน
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // เพิ่มผู้ใช้ใหม่ในฐานข้อมูล
        $stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $hashed_password, $email);

        if ($stmt->execute()) {
            // ตั้งค่าเซสชันหรือตัวแปรเพื่อเก็บข้อมูลการเข้าสู่ระบบ
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;

            // เปลี่ยนเส้นทางไปยังหน้าอื่นหลังจากเข้าสู่ระบบสำเร็จ
            header('Location: index.php');
            exit;
        } else {
            $error = 'เกิดข้อผิดพลาดในการสมัครสมาชิก กรุณาลองใหม่อีกครั้ง';
        }
    }
    $stmt->close();
}
$conn->close();
?>
