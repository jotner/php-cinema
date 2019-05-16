<?php
  require("includes/config.php");
  require("includes/functions.php");
?>

<!DOCTYPE html>
<html lang="sv" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Jonathan Eriksson</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <nav class="navbar" role="navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="index.php">
          <img src="img/logo.png" width="112" height="28">
        </a>
        <div class="navbar-burger burger">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </div>
      </div>
      <div class="navbar-menu">
        <div class="navbar-start">
          <a href="index.php" class="navbar-item">
            Home
          </a>
          <?php if (!isset($_SESSION['loggedin'])) { ?>
          <a href="login.php" class="navbar-item ">
            Tickets
          </a>
          <?php } else { ?>
          <a href="#" class="navbar-item">
            Tickets
          </a>
          <?php } ?>
          <a href="movies.php" class="navbar-item">
            Movies
          </a>
          <a href="#" class="navbar-item">
            About
          </a>
          <?php if (isset($_SESSION['loggedin'])) { ?>
          <a href="profile.php" class="navbar-item">
            My Profile
          </a>
          <?php } ?>
        </div>
        <div class="navbar-end">
          <?php if (!isset($_SESSION['loggedin'])) { ?>
          <a href="register.php" class="navbar-item">
            Register <i class="fas fa-user-plus log-icon"></i>
          </a>
          <a href="login.php" class="navbar-item">
            Log in <i class="fas fa-user log-icon"></i>
          </a>
          <?php } else { ?>
          <a href="logout.php" class="navbar-item">
            Log out <i class="fas fa-sign-out-alt log-icon"></i>
          </a>
          <?php } ?>
        </div>
      </div>
    </nav>
