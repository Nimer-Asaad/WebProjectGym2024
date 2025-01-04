<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login_signup.html");
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
            <a href="#" class="header-link">
               <i class='bx bxs-cog'></i>
               <span>Settings</span>
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

   <!-- Profile Section -->
   <div class="profile">
      <img src="assets/profile.jpg" alt="Profile Picture" class="profile-pic">
      <div class="profile-info">
         <h2>Abo Zuhdi</h2>
         <p>Last sync: Yesterday</p>
      </div>
      <button class="sync-btn">
         <i class="bx bx-refresh"></i> Sync
      </button>
   </div>

   <!-- Premium Section -->
   <section class="premium">
      <button class="btn premium-btn">Go Premium</button>
   </section>

   
   <section class="workouts" id="workouts">
    
    <!-- Beginner Section -->
    <br>
    <hr>
    <br>
    <h2 class="heading" data-aos="zoom-in">Beginner <span>Workouts</span></h2>
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
            <img src="assets/SHOILDER & BACK.jpg" alt="Shoulder & Back Beginner">
            <h4>Shoulder & Back Beginner</h4>
            <p>17 mins · 17 exercises</p>
        </div>
        <div class="row">
            <img src="assets/RUNNING.jpg" alt="Running Beginner">
            <h4>Running Beginner</h4>
            <p>30 mins · 5 exercises</p>
        </div>
    </div>
     
    <br>
    <hr>
    <br>

    <!-- Intermediate Section -->
    <h2 class="heading" data-aos="zoom-in">Intermediate <span>Workouts</span></h2>
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
            <img src="assets/SHOILDER & BACK.jpg" alt="Shoulder & Back Intermediate">
            <h4>Shoulder & Back Intermediate</h4>
            <p>19 mins · 17 exercises</p>
        </div>
        <div class="row">
            <img src="assets/RUNNING.jpg" alt="Running Intermediate">
            <h4>Running Intermediate</h4>
            <p>40 mins · 10 exercises</p>
        </div>
    </div>

    <!-- Advanced Section -->
     <br>
     <hr>
     <br>

    <h2 class="heading" data-aos="zoom-in">Advanced <span>Workouts</span></h2>
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
            <img src="assets/SHOILDER & BACK.jpg" alt="Shoulder & Back Advanced">
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
