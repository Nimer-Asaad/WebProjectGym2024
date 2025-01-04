<?php
$host = "localhost";
$dbname = "users"; // اسم قاعدة البيانات
$username = "root"; // المستخدم الافتراضي
$password = ""; // كلمة مرور MySQL الافتراضية

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
