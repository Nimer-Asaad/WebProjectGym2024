<?php
session_start();
include 'db.php'; // ربط قاعدة البيانات

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // التحقق من قاعدة البيانات
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $_SESSION['username'] = $username; // تخزين جلسة المستخدم
        header("Location: welcome.php"); // الانتقال إلى الصفحة الرئيسية
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
