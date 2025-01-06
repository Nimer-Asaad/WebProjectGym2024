<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login_signup.html");
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT * FROM login WHERE UserName = ?";
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
   <link rel="stylesheet" href="styleStart.css">
   <link rel="stylesheet" href="sidebar.css">
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
   <script src="StartPage.js" defer></script>
   
  
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
   <!-- Sidebar Section -->
   <div class="sidebar" id="sidebar">
   <button class="close-btn" id="close-btn">&times;</button>
    <h2>Your Profile</h2>
    <p><strong>Username:</strong> <?php echo htmlspecialchars($user['UserName']); ?></p>
    <p><strong>Gender:</strong> <?php echo htmlspecialchars($user['Gender']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($user['Gmail']); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($user['Phone']); ?></p>

    <!-- Form for updating user data -->
    <form id="update-form" method="POST" action="update_user.php">
    <h3>Update Your Info</h3>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['Gmail']); ?>" required>
    
    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" value="<?php echo htmlspecialchars($user['Phone']); ?>" required>
    
    <label for="gender">Gender:</label>
    <select id="gender" name="gender" required>
        <option value="Male" <?php echo ($user['Gender'] == 'Male') ? 'selected' : ''; ?>>Male</option>
        <option value="Female" <?php echo ($user['Gender'] == 'Female') ? 'selected' : ''; ?>>Female</option>
    </select>

    <button type="submit" class="update-btn">Update</button>
</form>


    </div>


   <!-- Profile Section -->
   <div class="profile">
      
         <div class="welcome-section">
            <h2 class="animate__animated animate__bounceIn">Welcome, <span><?php echo htmlspecialchars($user['UserName']); ?></span>!</h2>
            <p class="animate__animated animate__fadeInUp">We're excited to have you back. Let's achieve your fitness goals together!</p>
        </div>

   </div>

   
   <section class="workouts" id="workouts">
    
    <!-- Beginner Section -->
    <br>
    <hr>
    <br>
    <h2 class="heading" data-aos="zoom-in">Beginner <span>Workouts</span></h2>
    <div class="workout-content">
        <a href="https://www.youtube.com/watch?v=8PwoytUU06g" target="_blank">
        <div class="row">
            <img src="assets/ABS.jpg" alt="ABS Beginner">
            <h4>ABS Beginner</h4>
            <p>20 mins · 16 exercises</p>
        </div>
        </a>
        <a href="https://www.youtube.com/watch?v=l_TLBLnnnac" target="_blank">
         <div class="row">
            <img src="assets/CHEST.jpg" alt="Chest Beginner">
            <h4>Chest Beginner</h4>
            <p>11 mins · 11 exercises</p>

        </div>
        </a>
        <a href="https://www.youtube.com/watch?v=pgrsCUiNLUU" target="_blank">
        <div class="row">
            <img src="assets/ARM.jpg" alt="Arm Beginner">
            <h4>Arm Beginner</h4>
            <p>17 mins · 19 exercises</p>
        </div>
        </a>
        <a href="https://www.youtube.com/watch?v=ViY2LPDbU5A" target="_blank">
        <div class="row">
            <img src="assets/LEG.jpg" alt="Leg Beginner">
            <h4>Leg Beginner</h4>
            <p>26 mins · 23 exercises</p>
        </div>
        </a>
        <a href="https://www.youtube.com/watch?v=WIHy-ZnSndA" target="_blank">
        <div class="row">
            <img src="assets/SHOILDER & BACK.jpg" alt="Shoulder & Back Beginner">
            <h4>Shoulder & Back Beginner</h4>
            <p>17 mins · 17 exercises</p>
        </div>
        </a>
        <a href="https://www.youtube.com/watch?v=tSDrNoQPi6w" target="_blank">
        <div class="row">
            <img src="assets/RUNNING.jpg" alt="Running Beginner">
            <h4>Running Beginner</h4>
            <p>30 mins · 5 exercises</p>
        </div>
        </a>
    </div>
     
    <br>
    <hr>
    <br>

    <!-- Intermediate Section -->
    <h2 class="heading" data-aos="zoom-in">Intermediate <span>Workouts</span></h2>
    <div class="workout-content">
        <a href="https://www.youtube.com/watch?v=sIksOnN7GII" target="_blank">
        <div class="row">
            <img src="assets/ABS.jpg" alt="ABS Intermediate">
            <h4>ABS Intermediate</h4>
            <p>29 mins · 21 exercises</p>
        </div>
        </a>
        <a href=https://www.youtube.com/watch?v=BGXGdUj93BM" target="_blank">
        <div class="row">
            <img src="assets/CHEST.jpg" alt="Chest Intermediate">
            <h4>Chest Intermediate</h4>
            <p>15 mins · 14 exercises</p>
        </div>
        </a>
        <a href="https://www.youtube.com/watch?v=zIxdEgaISx8" target="_blank">
        <div class="row">
            <img src="assets/ARM.jpg" alt="Arm Intermediate">
            <h4>Arm Intermediate</h4>
            <p>26 mins · 25 exercises</p>
        </div>
        </a>
        <a href="https://www.youtube.com/watch?v=JX-85EGd08M" target="_blank">
        <div class="row">
            <img src="assets/LEG.jpg" alt="Leg Intermediate">
            <h4>Leg Intermediate</h4>
            <p>41 mins · 36 exercises</p>
        </div>
        </a>
        <a href="youtube.com/watch?v=8e9qInG3h3s&pp=ygU0U2hvdWxkZXIgJiBCYWNrIEludGVybWVkaWF0ZSAxOSBtaW5zIMK3IDE3IGV4ZXJjaXNlcw%3D%3D" target="_blank">
        <div class="row">
            <img src="assets/SHOILDER & BACK.jpg" alt="Shoulder & Back Intermediate">
            <h4>Shoulder & Back Intermediate</h4>
            <p>19 mins · 17 exercises</p>
        </div>
        </a>
        <a href="https://www.youtube.com/watch?v=3aPQm6zpNEM&pp=ygUsUnVubmluZyBJbnRlcm1lZGlhdGUgNDAgbWlucyDCtyAxMCBleGVyY2lzZXM%3D" target="_blank">
        <div class="row">
            <img src="assets/RUNNING.jpg" alt="Running Intermediate">
            <h4>Running Intermediate</h4>
            <p>40 mins · 10 exercises</p>
        </div>
        </a>
    </div>

    <!-- Advanced Section -->
     <br>
     <hr>
     <br>

    <h2 class="heading" data-aos="zoom-in">Advanced <span>Workouts</span></h2>
    <div class="workout-content">
        <a href="https://www.youtube.com/watch?v=46Khc7qOwUE" target="_blank">
        <div class="row">
            <img src="assets/ABS.jpg" alt="ABS Advanced">
            <h4>ABS Advanced</h4>
            <p>36 mins · 21 exercises</p>
        </div>
        </a>
        <a href="https://www.youtube.com/watch?v=l5qby5WXv18" target="_blank">
        <div class="row">
            <img src="assets/CHEST.jpg" alt="Chest Advanced">
            <h4>Chest Advanced</h4>
            <p>19 mins · 16 exercises</p>
        </div>
        </a>
        <a href="https://www.youtube.com/watch?v=BkTYDG093MM" target="_blank">
        <div class="row">
            <img src="assets/ARM.jpg" alt="Arm Advanced">
            <h4>Arm Advanced</h4>
            <p>32 mins · 28 exercises</p>
        </div>
        </a>
        <a href="https://www.youtube.com/watch?v=f14NdtYmL6M" target="_blank">
        <div class="row">
            <img src="assets/LEG.jpg" alt="Leg Advanced">
            <h4>Leg Advanced</h4>
            <p>53 mins · 43 exercises</p>
        </div>
        </a>
        <a href="https://www.youtube.com/watch?v=tESeX1Z8hzc" target="_blank">
        <div class="row">
            <img src="assets/SHOILDER & BACK.jpg" alt="Shoulder & Back Advanced">
            <h4>Shoulder & Back Advanced</h4>
            <p>19 mins · 17 exercises</p>
        </div>
        </a>
        <a href="https://www.youtube.com/watch?v=vZ-7ciRpO5s" target="_blank">
        <div class="row">
            <img src="assets/RUNNING.jpg" alt="Running Advanced">
            <h4>Running Advanced</h4>
            <p>50 mins · 15 exercises</p>
        </div>
        </a>
    </div>
</section>


   <!-- Footer Section -->

   <footer class="footer">
    <div class="social">
        <a href="#"><i class='bx bxl-instagram-alt'></i></a>
        <a href="#"><i class='bx bxl-facebook-square'></i></a>
        <a href="#"><i class='bx bxl-linkedin-square'></i></a>
    </div>

    <p class="copyright">
        &copy; Tiger Gym 2024/2025 - All Rights Reserved
    </p>
</footer>



</body>
</html>
