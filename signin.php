<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // الاتصال بقاعدة البيانات
    $conn = new mysqli("localhost", "root", "", "users"); // اسم قاعدة البيانات هو "users" كما هو ظاهر في الصورة

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // الاستعلام لجلب المستخدم بناءً على اسم المستخدم
    $sql = "SELECT * FROM gymuser WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // التحقق من كلمة المرور
        if ($password === $row['pass']) { // مقارنة كلمة المرور
            $_SESSION['username'] = $username;
            echo "<script>
                    alert('Login successful!');
                    window.location.href = 'StartPage.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Invalid password. Please try again.');
                    window.location.href = 'login_signup.html';
                  </script>";
        }
    } else {
        echo "<script>
                alert('User not found. Please sign up first.');
                window.location.href = 'login_signup.html';
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
