<?php
session_start();
$_SESSION['fileName'] = 'home';
include './includes/header.php';
include './includes/navbar.php';
include_once 'db/db.php';
include './includes/helper-functions.php';

$page = 1;
$orderBy = 'rating';
$order = 'DESC';

if (!empty($_SERVER['QUERY_STRING'])) {
  $querysArray = explode('&', $_SERVER['QUERY_STRING']);
  foreach ($querysArray as $singleQuery) {
    $singleQuery = explode('=', $singleQuery);
    if (strtoupper($singleQuery[0]) === 'PAGE') {
      $page = (int) $singleQuery[1];
    } else if (strtoupper($singleQuery[0]) === 'SORT') {
      if ($singleQuery[1] === 'rating' || $singleQuery[1] === 'release_date' || $singleQuery[1] === 'name') {
        $orderBy = $singleQuery[1];
      }
    } else if (strtoupper($singleQuery[0]) === 'ORDER') {
      if (strtoupper($singleQuery[1]) === 'DESC' || strtoupper($singleQuery[1]) === 'ASC') {
        $order = strtoupper($singleQuery[1]);
      }
    }
  }
}

$moviesPerPage = 12;
$offset = ($page - 1) * $moviesPerPage;
$stmt = $pdo->query('SELECT COUNT(*) as total FROM movies');

$totalMovies = $stmt->fetch()['total'];
$totalPages = (int) ceil($totalMovies / $moviesPerPage);

$stmt = $pdo->prepare("SELECT * FROM `movies` ORDER BY $orderBy $order LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $moviesPerPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$movies = $stmt->fetchAll();



?>
<div class="container">
  <div class="home-page">
    <h1>MOVIES</h1>
    <div class="sorting">
      <form method="GET">
        <label for="sorting">Sort: </label>
        <select name="sort" id="sorting">
          <option value="rating/DESC">Rating (10-1)</option>
          <option value="rating/ASC">Rating (1-10)</option>
          <option value="release_date/DESC">Newest to Oldest</option>
          <option value="release_date/ASC">Oldest to Newest</option>
          <option value="name/DESC">Alpha (Z => A)</option>
          <option value="name/ASC">Alpha (A => Z)</option>
        </select>
        <input type="submit" style="display: none;">
      </form>
    </div>
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
    <div class="pagination">
      <?php if ($page !== 1) {
        $prevPage = $page - 1;
        echo "<div class='prev'><a href='?" . urlQueries('page', $prevPage) . "'><i class='fa-solid fa-caret-left'></i></a></div>";
      } else {
        echo "<div class='prev'><a class='active'><i class='fa-solid fa-caret-left'></i></a></div>";
      } ?>
      <ul class="pages">
        <?php
        for ($i = 1; $i <= $totalPages; $i++) {
          if ($page === $i) {
            echo "<li><a class='active'>$i</a></li>";
          } else {
            echo "<li><a href='?" . urlQueries('page', $i) . "'>$i</a></li>";
          }
        }
        ?>
      </ul>
      <?php if ($page !== $totalPages) {
        $nextPage = $page + 1;
        echo "<div class='next'><a href='?" . urlQueries('page', $nextPage) . "'><i class='fa-solid fa-caret-right'></i></a></div>";
      } else {
        echo "<div class='next'><a class='active'><i class='fa-solid fa-caret-right'></i></a></div>";
      }
      ?>
    </div>
  </div>
</div>
<?php include './includes/footer.php' ?>