<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = new mysqli("localhost", "root", "", "login");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM login WHERE UserName = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($password === $row['Password']) { // مقارنة الكلمة مباشرة
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