<?php
// ข้อมูลสำหรับการเชื่อมต่อฐานข้อมูล
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "travel_booking";

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// ปิดการเชื่อมต่อเมื่อไม่ใช้งาน
// $conn->close();
?>
