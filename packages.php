<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองแพ็คเกจทัวร์ที่ดีที่สุด - Travel Express</title>
    <!-- รวม Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .jumbotron {
            background-image: url('image/pp2.jpg'); /* ใส่ที่อยู่ของรูปภาพของคุณ */
            background-size: cover;
            background-position: center;
            color: white; /* เปลี่ยนสีตัวอักษรเป็นสีขาว */
        }
        .jumbotron .container {
            background-color: rgba(0, 0, 0, 0.5); /* เพิ่มพื้นหลังโปร่งแสงเพื่อช่วยให้ข้อความชัดขึ้น */
            padding: 2rem;
            border-radius: 10px;
        }
        .navbar-nav {
            margin: auto;
        }
        .nav-link {
            padding: 0 15px;
            font-size: 1.1rem;
        }
        .navbar-brand {
            font-size: 1.5rem;
        }
        .login-form {
            max-width: 400px;
            margin: 30px auto;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f7f7f7;
        }
        .login-form h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Travel Express</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">หน้าหลัก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="packages.php">แพ็คเกจ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">เกี่ยวกับ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">ติดต่อเรา</a>
                </li>
                <!-- เพิ่มลิงก์เข้าสู่ระบบ -->
                <li class="nav-item">
                    <a class="nav-link" href="login.php">เข้าสู่ระบบ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">สมัครสมาชิก</a>
                </li>
            </ul>
        </div>
    </nav>

    

    <!-- Hero Section -->
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4">จองแพ็คเกจทัวร์ที่ดีที่สุด</h1>
            <p class="lead">พบกับข้อเสนอพิเศษและราคาที่ดีที่สุดสำหรับคุณ</p>
            <a href="#packages" class="btn btn-primary">ดูแพ็คเกจทัวร์</a>
        </div>
    </div>

    <!-- Packages Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">แพ็คเกจทัวร์ยอดนิยม</h2>
        <div class="row">
            <?php
                // สร้างข้อมูลแพ็คเกจทัวร์ในรูปแบบอาร์เรย์
                $packages = [
                    [
                        'name' => 'แพ็คเกจเที่ยวกระบี่',
                        'price' => '5,000 บาท',
                        'description' => 'สัมผัสหาดทรายขาว น้ำทะเลใส และการผจญภัยบนเกาะต่างๆ',
                        'image' => 'image/n.jpg',
                        'link' => 'booking.php?package=krabi'
                    ],
                    [
                        'name' => 'แพ็คเกจเที่ยวภูเก็ต',
                        'price' => '7,000 บาท',
                        'description' => 'ดื่มด่ำกับวิวทิวทัศน์ของทะเลอันดามันและชายหาดที่มีชื่อเสียง',
                        'image' => 'image/p.1.jpg',
                        'link' => 'booking.php?package=phuket'
                    ],
                    [
                        'name' => 'แพ็คเกจเที่ยวเชียงใหม่',
                        'price' => '6,000 บาท',
                        'description' => 'สำรวจวัฒนธรรมล้านนาและภูมิทัศน์ของเมืองเหนือที่น่าตื่นตา',
                        'image' => 'image/n.jpg',
                        'link' => 'booking.php?package=chiangmai'
                    ]
                ];

                // วนลูปแสดงแพ็คเกจทัวร์
                foreach ($packages as $package) {
                    echo '
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="' . $package['image'] . '" class="card-img-top" alt="' . $package['name'] . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $package['name'] . '</h5>
                                <p class="card-text">ราคาเริ่มต้นที่ ' . $package['price'] . '</p>
                                <p class="card-text">' . $package['description'] . '</p>
                                <a href="' . $package['link'] . '" class="btn btn-primary">จองเลย</a>
                            </div>
                        </div>
                    </div>';
                }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <p>© 2024 Travel Express. All rights reserved.</p>
        </div>
    </footer>

    <!-- รวม Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
