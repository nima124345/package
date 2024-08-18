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
            padding: 50pxrem;
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

    <!-- Form Section -->
    <div class="container" id="packages">
        <h2 class="text-center mb-4">ค้นหาและจองแพ็คเกจทัวร์</h2>
        <form action="booking.php" method="GET">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="province">จังหวัด</label>
                        <select class="form-control" id="province" name="province" required>
                            <option value="">== เลือก ==</option>
                            <option value="krabi">ปัตตานี</option>
                            <option value="phuket">ยะลา</option>
                            <option value="chiangmai">นราธิวาส</option>
                            <!-- สามารถเพิ่มจังหวัดอื่นๆ ได้ -->
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="duration">ระยะเวลา</label>
                        <select class="form-control" id="duration" name="duration" required>
                            <option value="">== เลือก ==</option>
                            <option value="3_days">2 วัน</option>
                            <option value="4_days">3 วัน</option>
                            <option value="5_days">4 วัน</option>
                            <option value="5_days">5 วัน</option>
                            <option value="5_days">6 วัน</option>
                            <option value="5_days">7 วัน</option>
                            <option value="5_days">8 วัน</option>
                            <option value="5_days">9 วัน</option>
                            <option value="5_days">10 วัน</option>
                            <!-- สามารถเพิ่มระยะเวลาอื่นๆ ได้ -->
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="date">วันที่</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">ค้นหาแพ็คเกจ</button>
            </div>
        </form>
    </div>

    <!-- Packages Section -->
    <div class="container my-5">
        <h2 class="text-center mb-4">แพ็คเกจทัวร์ยอดนิยม</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="image/p.1.jpg" class="card-img-top" alt="pattani">
                    <div class="card-body">
                        <h5 class="card-title">แพ็คเกจเที่ยวปัตตานี</h5>
                        <p class="card-text">ราคาเริ่มต้นที่ 5,000 บาท</p>
                        <p class="card-text">สัมผัสหาดทรายขาว น้ำทะเลใส และการผจญภัยบนเกาะต่างๆ</p>
                        <a href="booking.php?package=krabi" class="btn btn-primary">จองเลย</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/p.1.jpg" class="card-img-top" alt="yala">
                    <div class="card-body">
                        <h5 class="card-title">แพ็คเกจเที่ยวยะลา</h5>
                        <p class="card-text">ราคาเริ่มต้นที่ 7,000 บาท</p>
                        <p class="card-text">ดื่มด่ำกับวิวทิวทัศน์ของทะเลอันดามันและชายหาดที่มีชื่อเสียง</p>
                        <a href="booking.php?package=phuket" class="btn btn-primary">จองเลย</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/p.1.jpg" class="card-img-top" alt="naratiwas">
                    <div class="card-body">
                        <h5 class="card-title">แพ็คเกจเที่ยวยะลา</h5>
                        <p class="card-text">ราคาเริ่มต้นที่ 7,000 บาท</p>
                        <p class="card-text">ดื่มด่ำกับวิวทิวทัศน์ของทะเลอันดามันและชายหาดที่มีชื่อเสียง</p>
                        <a href="booking.php?package=phuket" class="btn btn-primary">จองเลย</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/p.1.jpg" class="card-img-top" alt="Phuket">
                    <div class="card-body">
                        <h5 class="card-title">แพ็คเกจเที่ยวยะลา</h5>
                        <p class="card-text">ราคาเริ่มต้นที่ 7,000 บาท</p>
                        <p class="card-text">ดื่มด่ำกับวิวทิวทัศน์ของทะเลอันดามันและชายหาดที่มีชื่อเสียง</p>
                        <a href="booking.php?package=phuket" class="btn btn-primary">จองเลย</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/p.1.jpg" class="card-img-top" alt="Phuket">
                    <div class="card-body">
                        <h5 class="card-title">แพ็คเกจเที่ยวยะลา</h5>
                        <p class="card-text">ราคาเริ่มต้นที่ 7,000 บาท</p>
                        <p class="card-text">ดื่มด่ำกับวิวทิวทัศน์ของทะเลอันดามันและชายหาดที่มีชื่อเสียง</p>
                        <a href="booking.php?package=phuket" class="btn btn-primary">จองเลย</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/p.1.jpg" class="card-img-top" alt="Phuket">
                    <div class="card-body">
                        <h5 class="card-title">แพ็คเกจเที่ยวยะลา</h5>
                        <p class="card-text">ราคาเริ่มต้นที่ 7,000 บาท</p>
                        <p class="card-text">ดื่มด่ำกับวิวทิวทัศน์ของทะเลอันดามันและชายหาดที่มีชื่อเสียง</p>
                        <a href="booking.php?package=phuket" class="btn btn-primary">จองเลย</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/p.1.jpg" class="card-img-top" alt="Phuket">
                    <div class="card-body">
                        <h5 class="card-title">แพ็คเกจเที่ยวยะลา</h5>
                        <p class="card-text">ราคาเริ่มต้นที่ 7,000 บาท</p>
                        <p class="card-text">ดื่มด่ำกับวิวทิวทัศน์ของทะเลอันดามันและชายหาดที่มีชื่อเสียง</p>
                        <a href="booking.php?package=phuket" class="btn btn-primary">จองเลย</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/p.1.jpg" class="card-img-top" alt="Phuket">
                    <div class="card-body">
                        <h5 class="card-title">แพ็คเกจเที่ยวยะลา</h5>
                        <p class="card-text">ราคาเริ่มต้นที่ 7,000 บาท</p>
                        <p class="card-text">ดื่มด่ำกับวิวทิวทัศน์ของทะเลอันดามันและชายหาดที่มีชื่อเสียง</p>
                        <a href="booking.php?package=phuket" class="btn btn-primary">จองเลย</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/p.1.jpg" class="card-img-top" alt="Chiang Mai">
                    <div class="card-body">
                        <h5 class="card-title">แพ็คเกจเที่ยวนราธิวาส</h5>
                        <p class="card-text">ราคาเริ่มต้นที่ 6,000 บาท</p>
                        <p class="card-text">สำรวจวัฒนธรรมล้านนาและภูมิทัศน์ของเมืองเหนือที่น่าตื่นตา</p>
                        <a href="booking.php?package=chiangmai" class="btn btn-primary">จองเลย</a>
                    </div>
                </div>
            </div>
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