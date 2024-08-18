<?php
session_start();

// เชื่อมต่อกับฐานข้อมูล
$servername = "localhost"; // ชื่อเซิร์ฟเวอร์
$username_db = "root"; // ชื่อผู้ใช้ฐานข้อมูล
$password_db = ""; // รหัสผ่านฐานข้อมูล
$dbname = "travel_booking"; // ชื่อฐานข้อมูล

// สร้างการเชื่อมต่อ
$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // รับข้อมูลจากฟอร์ม
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // เตรียมและเรียกใช้คำสั่ง SQL
        $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
        if ($stmt === false) {
            die("Error preparing the SQL statement: " . $conn->error);
        }

        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        // ตรวจสอบชื่อผู้ใช้
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($hash);
            $stmt->fetch();

            // ตรวจสอบรหัสผ่าน
            if (password_verify($password, $hash)) {
                // ตั้งค่าเซสชัน
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;

                // เปลี่ยนเส้นทางไปยังหน้าอื่น
                header('Location: index.php');
                exit;
            } else {
                $error = 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
            }
        } else {
            $error = 'ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง';
        }

        $stmt->close();
    } else {
        $error = 'กรุณากรอกข้อมูลให้ครบถ้วน';
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ - Travel Express</title>
    <!-- รวม Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
        }
        .login-form {
            max-width: 400px;
            margin: 80px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-form h2 {
            margin-bottom: 20px;
        }
        .login-form .form-group {
            margin-bottom: 15px;
        }
        .login-form .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container login-form">
        <h2 class="text-center">เข้าสู่ระบบ</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger text-center">
                <?= $error ?>
            </div>
        <?php endif; ?>
        <form action="login.php" method="POST">
    <div class="form-group">
        <label for="username">ชื่อผู้ใช้</label>
        <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <div class="form-group">
        <label for="password">รหัสผ่าน</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
    </div>
</form>

    </div>

    <!-- รวม Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
