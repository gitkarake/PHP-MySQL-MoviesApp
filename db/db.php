<?php

require 'db/config.php';
$dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

try {
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if ($pdo) {
    // echo "Connected to the $db database successfully!";
  }
} catch (PDOException $e) {
  echo $e->getMessage();
}

// $query = "SELECT * FROM movies";
// $stmt = $pdo->query($query);

// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//   // Access individual columns using $row['column_name']
//   // echo '<pre>';
//   // var_dump($row);
//   // echo '</pre>';
//   echo '<pre>';
//   var_dump(json_decode($row['genres'], true));
//   echo '</pre>';
// }

// $query = "INSERT INTO movies (name, release_date, rating, storyline, img, genres, imdb_link) VALUES (?, ?, ?, ?, ?, ?, ?)";
// $stmt = $pdo->prepare($query);

// $link = '';

// $name = 'newMovie2';
// $release_date = '2023-05-19';
// $rating = 9;
// $storyline = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et sagittis nulla. Morbi vel aliquam diam. Nulla facilisi. Donec non augue nec nulla feugiat ultricies. Nullam convallis lectus id ultricies sollicitudin. Fusce id suscipit dui. Cras rhoncus eleifend magna ac ullamcorper. Fusce ut eleifend lorem. In hac habitasse platea dictumst. Integer consectetur pharetra lorem, eu hendrerit mi eleifend non. Ut non eros augue. Fusce dapibus, justo id cursus tincidunt, massa tellus consequat sem, id pulvinar tellus sapien nec leo.';
// $img = 'https://picsum.photos/300/300';
// $genres = json_encode(['Apple', 'Orange', 'Mango']);
// $imdb_link = empty($link) ? null : $link;

// $stmt->execute([$name, $release_date, $rating, $storyline, $img, $genres, $imdb_link]);