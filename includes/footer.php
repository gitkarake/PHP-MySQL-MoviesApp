<script src="js/main.js"></script>
<?php if (isset($_SESSION['fileName'])) {
  echo "<script src='js/" . $_SESSION['fileName'] . ".js'></script>";
} ?>
</body>

</html>