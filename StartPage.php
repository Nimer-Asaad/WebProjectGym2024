<?php
session_start();
include 'db.php'; // الاتصال بقاعدة البيانات

if (!isset($_SESSION['username'])) {
    header("Location: login_signup.html");
    exit();
}

$username = $_SESSION['username'];

// جلب بيانات المستخدم
$sql = "SELECT * FROM gymuser WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    echo "<script>
            alert('User not found!');
            window.location.href = 'login_signup.html';
          </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workout Plans</title>
    <link rel="stylesheet" href="styleStart.css"> <!-- ملف CSS الرئيسي -->
    <link rel="stylesheet" href="sidebar.css"> <!-- ملف CSS للشريط الجانبي -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
   <!-- Header Section -->
   <header>
      <a href="#home" class="logo">Tiger <span>GYM</span></a>
      <ul class="navbar">
         <li>
            <a href="#" class="header-link">
               <i class='bx bxs-home'></i>
               <span>Training</span>
            </a>
         </li>
         <li>
            <a href="#" class="header-link">
               <i class='bx bxs-bar-chart-alt-2'></i>
               <span>Report</span>
            </a>
         </li>
         <li>
            <a href="#" class="header-link" id="settings-btn">
               <i class='bx bxs-cog'></i>
               <span>Profile</span>
            </a>
         </li>
         <li>
            <a href="logout.php" class="header-link">
               <i class='bx bx-log-out'></i>
               <span>Logout</span>
            </a>
         </li>
      </ul>
   </header>
  <!-- Welcome Section -->
<div class="welcome-section">
    <h2>Welcome, <span><?php echo htmlspecialchars($user['username']); ?></span>!</h2>
    <p>We're excited to have you back. Let's achieve your fitness goals together!</p>
</div>



   <!-- Sidebar Section -->
   <div class="sidebar" id="sidebar">
      <button class="close-btn" id="close-btn">&times;</button>
      <h2>Your Profile</h2>
      <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
      <p><strong>Gender:</strong> <?php echo htmlspecialchars($user['gender']); ?></p>
      <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
      <p><strong>Phone:</strong> <?php echo htmlspecialchars($user['phone_number']); ?></p>
   </div>

   <!-- Workouts Section -->
   <section class="workouts" id="workouts">
    <!-- Beginner Workouts -->
    <h2 class="heading">Beginner <span>Workouts</span></h2>
    <div class="workout-content">
        <div class="row">
            <img src="assets/ABS.jpg" alt="ABS Beginner">
            <h4>ABS Beginner</h4>
            <p>20 mins · 16 exercises</p>
        </div>
        <div class="row">
            <img src="assets/CHEST.jpg" alt="Chest Beginner">
            <h4>Chest Beginner</h4>
            <p>11 mins · 11 exercises</p>
        </div>
        <div class="row">
            <img src="assets/ARM.jpg" alt="Arm Beginner">
            <h4>Arm Beginner</h4>
            <p>17 mins · 19 exercises</p>
        </div>
        <div class="row">
            <img src="assets/LEG.jpg" alt="Leg Beginner">
            <h4>Leg Beginner</h4>
            <p>26 mins · 23 exercises</p>
        </div>
        <div class="row">
            <img src="assets/SHOULDER_BACK.jpg" alt="Shoulder & Back Beginner">
            <h4>Shoulder & Back Beginner</h4>
            <p>17 mins · 17 exercises</p>
        </div>
        <div class="row">
            <img src="assets/RUNNING.jpg" alt="Running Beginner">
            <h4>Running Beginner</h4>
            <p>30 mins · 5 exercises</p>
        </div>
    </div>

    <!-- Intermediate Workouts -->
    <h2 class="heading">Intermediate <span>Workouts</span></h2>
    <div class="workout-content">
        <div class="row">
            <img src="assets/ABS.jpg" alt="ABS Intermediate">
            <h4>ABS Intermediate</h4>
            <p>29 mins · 21 exercises</p>
        </div>
        <div class="row">
            <img src="assets/CHEST.jpg" alt="Chest Intermediate">
            <h4>Chest Intermediate</h4>
            <p>15 mins · 14 exercises</p>
        </div>
        <div class="row">
            <img src="assets/ARM.jpg" alt="Arm Intermediate">
            <h4>Arm Intermediate</h4>
            <p>26 mins · 25 exercises</p>
        </div>
        <div class="row">
            <img src="assets/LEG.jpg" alt="Leg Intermediate">
            <h4>Leg Intermediate</h4>
            <p>41 mins · 36 exercises</p>
        </div>
        <div class="row">
            <img src="assets/SHOULDER_BACK.jpg" alt="Shoulder & Back Intermediate">
            <h4>Shoulder & Back Intermediate</h4>
            <p>19 mins · 17 exercises</p>
        </div>
        <div class="row">
            <img src="assets/RUNNING.jpg" alt="Running Intermediate">
            <h4>Running Intermediate</h4>
            <p>40 mins · 10 exercises</p>
        </div>
    </div>

    <!-- Advanced Workouts -->
    <h2 class="heading">Advanced <span>Workouts</span></h2>
    <div class="workout-content">
        <div class="row">
            <img src="assets/ABS.jpg" alt="ABS Advanced">
            <h4>ABS Advanced</h4>
            <p>36 mins · 21 exercises</p>
        </div>
        <div class="row">
            <img src="assets/CHEST.jpg" alt="Chest Advanced">
            <h4>Chest Advanced</h4>
            <p>19 mins · 16 exercises</p>
        </div>
        <div class="row">
            <img src="assets/ARM.jpg" alt="Arm Advanced">
            <h4>Arm Advanced</h4>
            <p>32 mins · 28 exercises</p>
        </div>
        <div class="row">
            <img src="assets/LEG.jpg" alt="Leg Advanced">
            <h4>Leg Advanced</h4>
            <p>53 mins · 43 exercises</p>
        </div>
        <div class="row">
            <img src="assets/SHOULDER_BACK.jpg" alt="Shoulder & Back Advanced">
            <h4>Shoulder & Back Advanced</h4>
            <p>19 mins · 17 exercises</p>
        </div>
        <div class="row">
            <img src="assets/RUNNING.jpg" alt="Running Advanced">
            <h4>Running Advanced</h4>
            <p>50 mins · 15 exercises</p>
        </div>
    </div>
</section>


   <script>
      const settingsBtn = document.getElementById('settings-btn'); // زر Settings (Profile)
      const sidebar = document.getElementById('sidebar'); // الشريط الجانبي
      const closeBtn = document.getElementById('close-btn'); // زر الإغلاق داخل الشريط الجانبي

      // إظهار الشريط الجانبي عند النقر على زر Settings (Profile)
      if (settingsBtn) {
          settingsBtn.addEventListener('click', (event) => {
              event.preventDefault(); // منع السلوك الافتراضي للرابط
              sidebar.classList.add('active');
          });
      }

      // إخفاء الشريط الجانبي عند النقر على زر الإغلاق
      if (closeBtn) {
          closeBtn.addEventListener('click', () => {
              sidebar.classList.remove('active');
          });
      }
   </script>
</body>
</html>
