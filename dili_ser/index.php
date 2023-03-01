<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello, world!</title>
  </head>
</html>

<?php
  include 'inc/head.php';
  $routepages = new Route();
  $page = $routepages->getPage();
?>

<body>
  <?php include 'inc/header.php'; ?>
  
  <!-- Get page name from $_GET found in inc -->
  <?php include "$page.php"; ?>

  <script src="./assets/js/index.js"></script>
</body>
