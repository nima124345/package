<?php
$packages = [
    "krabi" => [
        "name" => "ปัตตานี",
        "duration" => "4 วัน 3 คืน",
        "price" => "15,990 บาท",
        "details" => "แพ็คเกจรวมตั๋วเครื่องบิน ที่พัก อาหาร และทัวร์ทั้งหมด"
    ],
    "phuket" => [
        "name" => "ยะลา",
        "duration" => "5 วัน 4 คืน",
        "price" => "18,500 บาท",
        "details" => "แพ็คเกจรวมตั๋วเครื่องบิน ที่พัก อาหาร และทัวร์ทั้งหมด"
    ],
    "chiangmai" => [
        "name" => "นราธิวาส",
        "duration" => "3 วัน 2 คืน",
        "price" => "12,990 บาท",
        "details" => "แพ็คเกจรวมตั๋วเครื่องบิน ที่พัก อาหาร และทัวร์ทั้งหมด"
    ]
];

$packageKey = $_GET['package'] ?? 'krabi';
$package = $packages[$packageKey] ?? $packages['krabi'];
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองแพ็คเกจ - <?= htmlspecialchars($package['name']); ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <h1><?= htmlspecialchars($package['name']); ?></h1>
        <p>ระยะเวลา: <?= htmlspecialchars($package['duration']); ?></p>
        <p>ราคา: <?= htmlspecialchars($package['price']); ?></p>
        <p><?= htmlspecialchars($package['details']); ?></p>

        <form method="post" action="confirm.php">
            <div class="form-group">
                <label for="name">ชื่อผู้จอง:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">อีเมล:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">เบอร์โทร:</label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <input type="hidden" name="package" value="<?= htmlspecialchars($packageKey); ?>">
            <button type="submit" class="btn btn-primary">ยืนยันการจอง</button>
        </form>
    </div>
</body>
</html>
