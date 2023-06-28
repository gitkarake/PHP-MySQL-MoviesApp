<?php
session_start();
$_SESSION['fileName'] = 'about';
require 'includes/header.php';
require 'includes/navbar.php';
?>
<div class="container">
  <div class="about-page">
    <div class="header">
      <h1>About MoviesApp</h1>
      <p>
        MoviesApp is a Web Application designed and developed to enhance my skills in
        PHP and MySQL. With a focus on creating a user-friendly and intuitive experience, MoviesApp allows users to
        add a movie, rate it, and filter them based on genres.
      </p>
    </div>
  </div>
</div>
<?php require 'includes/footer.php' ?>