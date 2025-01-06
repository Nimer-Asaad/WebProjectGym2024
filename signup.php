<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password']; // لا يتم التشفير هنا
    $conn = new mysqli("localhost", "root", "", "login");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql_check = "SELECT * FROM login WHERE UserName = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $username);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();
    if ($result_check->num_rows > 0) {
        echo "<script>
                alert('Username already exists. Please log in.');
                window.location.href = 'login_signup.html';
              </script>";
    } else {
        $sql_insert = "INSERT INTO login (UserName, Password, Gmail) VALUES (?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("sss", $username, $password, $email);
        if ($stmt_insert->execute()) {
            echo "<script>
                    alert('Registration successful! Please log in.');
                    window.location.href = 'login_signup.html';
                  </script>";
        } else {
            echo "<script>
                    alert('Error occurred during registration. Please try again.');
                    window.location.href = 'login_signup.html';
                  </script>";
        }
    }
    $stmt_check->close();
    $stmt_insert->close();
    $conn->close();
}
?>