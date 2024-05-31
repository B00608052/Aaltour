<?php
// Initialize the session
session_start();
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>navigation bar</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../styles/styles1.css" />
    <link rel="stylesheet" href="../styles/stylecommon.css" />
  </head>
  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <!-- content start -->

    <nav class="navbar navbar-expand-md fixed-top bg-white-opacity-37" id="navbar">
      <div class="container-fluid d-flex align-items-baseline">
          <div class="showoutline">
              <a href="../index.php">
                  <img src="../images/Aaltour_logo.png" class="navbar-brand" style="height: 40px" alt="" />
              </a>
          </div>
          <div class="d-grid">
              <button class="navbar-toggler mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav me-auto mb-1 mb-lg-0">
                      <?php
                      session_start();
                      if (isset($_SESSION['user_id'])) {
                          // 用户已登录，显示用户的用户名和默认头像
                          $username = $_SESSION['username'];
                          echo '<div class="nav-item px-2 py-1">';
                          echo '<span class="welcome">Welcome, ' . $username . '!</span>';
                          echo '</div>';
                          echo '<a href="../pages/routepick.php">';
                          echo '<li class="nav-item px-2 py-1">';
                          echo '<button class="btn btn-success" type="submit">Start Aaltour</button>';
                          echo '</li>';
                          echo '</a>';
                          // 这里可以添加用户头像的代码
                      } else {
                          // 用户未登录，显示注册和登录按钮
                          echo '<a href="../pages/registration.php">';
                          echo '<li class="nav-item px-2 py-1">';
                          echo '<button class="btn btn-outline-success" type="submit">Register</button>';
                          echo '</li>';
                          echo '</a>';
                          
                          echo '<a href="../pages/login.php">';
                          echo '<li class="nav-item px-2 py-1">';
                          echo '<button class="btn btn-outline-success" type="submit">Log in</button>';
                          echo '</li>';
                          echo '</a>';
                      }
                      ?>
                      <!-- <li class="nav-item px-2 py-1">
                          <button class="btn btn-success" type="submit">Start Aaltour</button>
                      </li> -->
                  </ul>
              </div>
          </div>
      </div>
  </nav>
  </body>
</html>
