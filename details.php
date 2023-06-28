<?php
session_start();
$_SESSION['fileName'] = 'details';
require 'includes/header.php';
require 'includes/navbar.php';
require_once 'db/db.php';
if (!empty(explode('=', $_SERVER['QUERY_STRING'])[0]) && explode('=', $_SERVER['QUERY_STRING'])[0] === 'id') {
  $id = (int) explode('=', $_SERVER['QUERY_STRING'])[1];
  if ($id == 0) {
    header('Location: index.php');
  }

  $stmt = $pdo->prepare('SELECT * FROM movies WHERE id = ?');
  $stmt->execute([$id]);
  $movie = $stmt->fetch();
}
else {
  header('Location: index.php');
}
?>
<div class="container">
  <div class="details-page">
    <h2>
      <?php echo $movie['name'] ?>
    </h2>
    <div class="details">
      <div class="img">
        <img src="<?php echo $movie['img'] ?>" alt="">
      </div>
      <div class="content">
        <div class="genres-container">
          <h3>Genres: </h3>
          <ul class="genres">
            <?php
            $genres = json_decode($movie['genres']);
            foreach ($genres as $gen) {
              echo "<li><a class='btn' href='genres.php?genres=$gen'>$gen</a></li>";
            }
            ?>
          </ul>
        </div>
        <div class="rating">
          <h3>Rating: </h3>
          <span class='value'>
            <?php echo $movie['rating'] ?>
          </span>
        </div>
        <div class="story-line">
          <h3>Story Line: </h3>
          <span class='value'>
            <?php echo $movie['storyline'] ?>
          </span>
        </div>
        <div class="release-date">
          <h3>Release Date: </h3>
          <span class='value'>
            <?php echo $movie['release_date'] ?>
          </span>
        </div>
        <?php if ($movie['imdb_link']) { ?>
          <div class="imdb-link">
            <h3>IMDb Link: </h3>
            <span class='value'>
              <a target="_blank" href="<?php echo $movie['imdb_link']; ?>">
                https://www.imdb.com/title/<?php echo implode('', explode(' ', $movie['name'])); ?>
              </a>
            </span>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<?php require 'includes/footer.php' ?>