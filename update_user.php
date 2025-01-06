<?php
session_start();
include 'db.php'; // تأكد أن ملف db.php موجود

if (!isset($_SESSION['username'])) {
    header("Location: login_signup.html");
    exit();
}

$username = $_SESSION['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];

$sql = "UPDATE login SET Gmail = ?, Phone = ?, Gender = ? WHERE UserName = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $email, $phone, $gender, $username);

if ($stmt->execute()) {
    // إعادة التوجيه إلى الصفحة الرئيسية بعد التحديث بنجاح
    header("Location: StartPage.php");
    exit();
} else {
    // عرض رسالة خطأ إذا فشل التحديث
    echo "<script>
            alert('Error updating profile!');
            window.location.href = 'StartPage.php';
          </script>";
}
?>
