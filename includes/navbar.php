<div class="navbar">
  <div class="nav-container">
    <div class="logo">
      <h1><a href="/">MoviesApp</a></h1>
    </div>
    <ul class="links">
      <?php if (!(isset($_SESSION['fileName']) && $_SESSION['fileName'] === 'add-movie')) {
        ?>
        <li><a class="btn" href="add-movie.php">Add Movie</a></li>
        <?php
      } ?>
      <li><a href="about.php">About</a></li>
    </ul>
  </div>
</div>