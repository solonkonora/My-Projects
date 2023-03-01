<?php
    include_once 'process/classes.php';
    $routepages = new Route();
    $page = $routepages->getPage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> <?php echo $page ?> </title>
<meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo strtoupper($_GET['page']); ?></title>
    
    <!-- <link href="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <!-- <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> -->
    <link rel="stylesheet" href="fonts/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/css/all.min.css">
    <link rel="proconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="fonts-6//css/all.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    
    <!-- <script src="assets/js/index.js"></script> -->

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/css/style.css?<?php echo time(); ?>">
</head>