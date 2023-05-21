<?php
session_start();
$_SESSION['fileName'] = 'genres';
require 'includes/header.php';
require 'includes/navbar.php';
include_once 'db/db.php';

if (!empty(explode('=', $_SERVER['QUERY_STRING'])[0]) && explode('=', $_SERVER['QUERY_STRING'])[0] === 'genres') {
  // The value you want to search for
  $genre = explode('=', $_SERVER['QUERY_STRING'])[1];

  // Prepare the SQL statement
  $sql = "SELECT * FROM movies WHERE genres LIKE :searchValue ORDER BY rating DESC";
  $stmt = $pdo->prepare($sql);

  // Bind the parameter and execute the query
  $stmt->execute(['searchValue' => '%' . $genre . '%']);

  // Fetch all the matching records
  $movies = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
  header('Location: index.php');
}

?>
<div class="container">
  <div class="genres-page">
    <h1><?php echo strtoupper($genre) ?> MOVIES</h1>
    <div class="movies">
      <?php
      foreach ($movies as $movie) {
      ?>
        <div class="box">
          <div class="img">
            <img src="<?php echo $movie['img'] ?>" alt="">
          </div>
          <div class="content">
            <h2><?php echo $movie['name'] ?> (<?php echo date('Y', strtotime($movie['release_date'])) ?>)</h2>
            <ul class="genres">
              <h4>Genres:</h4>
              <?php
              foreach (json_decode($movie['genres']) as $gen) {
                echo "<li><a href='genres.php?genres=$gen'>$gen</a></li>";
              }
              ?>
            </ul>
            <ul class="rating">
              <h4>Rating:</h4>
              <span class="rate"><?php echo $movie['rating'] ?></span>
              <?php
              for ($i = 1; $i < 11; $i++) {
                if ((intval($movie['rating'])) >= $i) {
                  echo '<li class="fill"><i class="fa-solid fa-star"></i></li>';
                } else {
                  echo '<li class=""><i class="fa-regular fa-star"></i></li>';
                }
              }
              ?>
            </ul>
            <a class="details" href="details.php?id=<?php echo $movie['id'] ?>">Details...</a>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</div>
<?php include './includes/footer.php' ?>