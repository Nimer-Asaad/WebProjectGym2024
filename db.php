<?php
$host = "localhost";
$dbname = "users"; // اسم قاعدة البيانات
$username = "root"; // اسم المستخدم الافتراضي
$password = ""; // كلمة المرور الافتراضية

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($host, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
