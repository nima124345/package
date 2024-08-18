<?php
$province = $_GET['province'] ?? '';
$duration = $_GET['duration'] ?? '';
$date = $_GET['date'] ?? '';

echo "<h1>ผลการค้นหาของคุณ</h1>";
echo "<p>จังหวัด: " . htmlspecialchars($province) . "</p>";
echo "<p>ระยะเวลา: " . htmlspecialchars($duration) . "</p>";
echo "<p>วันที่: " . htmlspecialchars($date) . "</p>";
?>
