<?php
session_start();
$_SESSION['fileName'] = 'add-movie';
include './includes/header.php';
include './includes/navbar.php';
include './includes/helper-functions.php';
require_once 'db/db.php';

if (isset($_POST['submit'])) {
  if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['file'];
  }

  $isValidImage = validateImage($file);

  if (!$isValidImage['success']) {
    $error = $isValidImage['msg'];
  }
  else {
    // Specify the destination folder to save the uploaded file
    $destinationFolder = 'upload/';

    // Move the uploaded file to the destination folder
    $uploadedFilePath = $destinationFolder . time() . '-' . $file['name'];
    if (move_uploaded_file($file['tmp_name'], $uploadedFilePath)) {
      // upload data to db
      $query = "INSERT INTO movies (name, release_date, rating, storyline, img, genres, imdb_link) VALUES (?, ?, ?, ?, ?, ?, ?)";
      $stmt = $pdo->prepare($query);

      $name = $_POST['name'];
      $release_date = $_POST['release_date'];
      $rating = $_POST['rating'];
      $storyline = $_POST['storyline'];
      $img = $uploadedFilePath;
      $genres = json_encode($_POST['genres']);
      $imdb_link = empty($_POST['imdb']) ? null : $_POST['imdb'];

      $stmt->execute([$name, $release_date, $rating, $storyline, $img, $genres, $imdb_link]);

      header('Location: index.php');
    }
    else {
      $error = "somthing went wrong try again later.";
    }
  }
}

?>
<div class="container">
  <div class="add-movie">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
      <h2>Add Movie</h2>
      <div class="input-holder">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
      </div>
      <div class="input-holder">
        <label for="date">Release Date:</label>
        <input type="date" name="release_date" id="date" required>
      </div>
      <div class="input-holder">
        <label for="rating">Rating:</label>
        <input type="text" name="rating" id="rating" required>
      </div>
      <div class="input-holder">
        <label for="genres-container">Genres:</label>
        <div class="genres-container">
          <div class="checkbox-holder">
            <label for="checkboxAction" class="btn">Action</label>
            <input type="checkbox" name="genres[]" value="Action" id="checkboxAction">
          </div>
          <div class="checkbox-holder">
            <label for="checkboxAdventure" class="btn">Adventure</label>
            <input type="checkbox" name="genres[]" value="Adventure" id="checkboxAdventure">
          </div>
          <div class="checkbox-holder">
            <label for="checkboxComedy" class="btn">Comedy</label>
            <input type="checkbox" name="genres[]" value="Comedy" id="checkboxComedy">
          </div>
          <div class="checkbox-holder">
            <label for="checkboxDrama" class="btn">Drama</label>
            <input type="checkbox" name="genres[]" value="Drama" id="checkboxDrama">
          </div>
          <div class="checkbox-holder">
            <label for="checkboxFantasy" class="btn">Fantasy</label>
            <input type="checkbox" name="genres[]" value="Fantasy" id="checkboxFantasy">
          </div>
          <div class="checkbox-holder">
            <label for="checkboxSci-Fi" class="btn">Sci-Fi</label>
            <input type="checkbox" name="genres[]" value="Sci-Fi" id="checkboxSci-Fi">
          </div>
          <div class="checkbox-holder">
            <label for="checkboxCrime" class="btn">Crime</label>
            <input type="checkbox" name="genres[]" value="Crime" id="checkboxCrime">
          </div>
          <div class="checkbox-holder">
            <label for="checkboxBiography" class="btn">Biography</label>
            <input type="checkbox" name="genres[]" value="Biography" id="checkboxBiography">
          </div>
          <div class="checkbox-holder">
            <label for="checkboxWar" class="btn">War</label>
            <input type="checkbox" name="genres[]" value="War" id="checkboxWar">
          </div>
          <div class="checkbox-holder">
            <label for="checkboxWestern" class="btn">Western</label>
            <input type="checkbox" name="genres[]" value="Western" id="checkboxWestern">
          </div>
          <div class="checkbox-holder">
            <label for="checkboxThriller" class="btn">Thriller</label>
            <input type="checkbox" name="genres[]" value="Thriller" id="checkboxThriller">
          </div>
        </div>
        <?php if (isset($error)) {
          echo "<div class='error'>$error</div>";
        } ?>
      </div>
      <div class="input-holder">
        <label for="storyline">Storyline:</label>
        <textarea name="storyline" id="storyline" required></textarea>
      </div>
      <div class="input-holder">
        <label for="file">Movie Image:</label>
        <input type="file" accept="image/*" name="file" id="file" required>
      </div>
      <div class="input-holder">
        <label class="optional" for="imdb">IMDb Link:</label>
        <input type="text" name="imdb" id="imdb">
      </div>
      <input class="btn" type="submit" name="submit" value="Submit">
    </form>
  </div>
</div>
<?php include './includes/footer.php'; ?>