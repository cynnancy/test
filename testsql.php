<?php
  require_once 'login.php';
  
  try
  {
    $pdo = new PDO($attr, $user, $pass, $opts);
  }
  catch (PDOException $e)
  {
    throw new PDOException($e->getMessage(), (int)$e->getCode());
  }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <script src="CI317/Curryweb/js/uikit.min.js"></script>
        <script src="CI317/Curryweb/js/uikit-icons.min.js"></script>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Curry Map-Chiayi</title>
        <link rel="icon" type="image/x-icon" href="CI317/Curryweb/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"> </script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="CI317/Curryweb/css/styles.css" rel="stylesheet" /> 
        <link rel="CI317/Curryweb/stylesheet" href="css/uikit.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
<body>
  <header>
    <h1 class="site-heading text-center text-faded d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Find Your Destined Curry</span>
      <span class="site-heading-lower"><a class="nav-link text-uppercase" href='Curry.php'>Curry Map</span>
    </h1>
  </header>
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href='Curry.php'>Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto" >
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Northern.html">Northern</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Central.html">Central</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Southern.html">Southern</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="Eastern.html">Eastern</a></li>
                    </ul>
                </div>
            </div>
  </nav>
  <section class="page-section cta">
    <div class=" container">
  <?php

  $query  = "SELECT * FROM southern___chiayi";
  $result = $pdo->query($query);
  
  while ($row = $result->fetch(PDO::FETCH_BOTH))
  {
    echo '<div class="row">';
    echo '<div class="col-xl-9 mx-auto">';
    echo '<div class="cta-inner bg-faded text-center rounded" >';
    echo '<ul uk-accordion>';
    echo '<li ><a class="uk-accordion-title" href="#"></a>';
    echo '<h4>編號:   ' . htmlspecialchars($row['Index'])    . "</h4><br>";
    echo '<div class="uk-accordion-content">';
    echo '<div  class="uk-card uk-card-default uk-card-body uk-margin-small">';
    echo '<a href="https://goo.gl/maps/T45zC7GNoaerhCgn9" target="_blank">'.htmlspecialchars($row['address']) .'</a>';
    echo '店名:    ' . htmlspecialchars($row['name'])     . "<br>";
    echo '地址: ' . htmlspecialchars($row['address']) . "<br>";
    echo '電話:     ' . htmlspecialchars($row['phone'])      . "<br>";
    echo '評分:     ' . htmlspecialchars($row['rating'])      . "<br>";
    echo '評分數量:     ' . htmlspecialchars($row['rating_numbers'])      . "<br>";
    echo '網站:     ' . htmlspecialchars($row['website'])      . "<br><br>";
    echo '</div>';
    echo '</div>';
    echo '</li>';
    echo '</ul>';
    echo '</div>';
    echo '</ul>';
    echo '</div>';
  }
?>
</body>
</html>