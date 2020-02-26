<?php
$_SESSION['username'] = '';
unset ($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Paper Forest</title>
  <script src="https://kit.fontawesome.com/9e19fba627.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Pacifico|Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!--Nav bar-->
  <nav class="navbar navbar-expand-md navbar-dark bg-primary px-4 ">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-remote="myRemoteURL.do" data-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <a class="navbar-brand pl-2" href="#">
      <h3>Paper Forest</h3>
    </a>

    <?php $_SESSION['username']=''; ?>
    <form class="form-inline " action="search.php" method="POST">
      <div class="input-group ">
        <input class="form-control search-bar bg-white rounded-pill" type="search" placeholder="Search" aria-label="Search" name="search">
      </div>
    </form>

    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ml-auto  ">
        <li class="nav-item active ">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">About</a>
        </li>
        <!-- <li class="nav-item ">
          <a class="nav-link" href="#">Contact</a>
        </li> -->
        <li class="nav-item ">
          <a class="nav-link " href="#" data-toggle="modal" data-remote="myRemoteURL.do" data-target="#logIn">Log In</a>
          <?php include('templates/login/logUp.php'); ?>
        </li>
        <li class="nav-item ">
          <?php include('templates/login/signUp.php'); ?>
          <a class="nav-link btn btn-outline-success" href="#" data-toggle="modal" data-remote="myRemoteURL.do" data-target="#signUp">Sign-up</a>
        </li>
      </ul>
    </div>
  </nav>

  <!--header-->
  <?php include('templates/header.html'); ?>

  <!-- Nav -->
  <nav class="navbar navbar-expand-md navbar-light text-white px-4">
    <button class="navbar-toggler btn btn-outline-info mb-3" type="button" data-toggle="collapse" data-remote="myRemoteURL.do" data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-chevron-circle-down"></i> Categories
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="nav">
      <ul class="nav nav-pills mb-3 justify-content-center flex-column flex-md-row" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-biography-tab" data-toggle="pill" href="#pills-biography" role="tab" aria-controls="pills-biography" aria-selected="false">Biography</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-fiction-tab" data-toggle="pill" href="#pills-fiction" role="tab" aria-controls="pills-fiction" aria-selected="false">Fiction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-science-tab" data-toggle="pill" href="#pills-science" role="tab" aria-controls="pills-science" aria-selected="false">Science Fiction</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-fantasy-tab" data-toggle="pill" href="#pills-fantasy" role="tab" aria-controls="pills-fantasy" aria-selected="false">Fantasy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-mystery-tab" data-toggle="pill" href="#pills-mystery" role="tab" aria-controls="pills-mystery" aria-selected="false">Mysteries</a>
        </li>
      </ul>
    </div>
  </nav>

  <?php $_SESSION['username']=''; ?>
  <div class="tab-content" id="pills-tabContent">
        <!-- All -->
        <?php include('templates/all.php'); ?>
        <!-- Biography -->
        <?php include('templates/biography.php'); ?>
        <!-- Fiction -->
        <?php include('templates/fiction.php'); ?>
        <!-- Science Fiction -->
        <?php include('templates/scienceFiction.php'); ?>
        <!-- Fantasy -->
        <?php include('templates/fantasy.php'); ?>
        <!-- Mystery -->
        <?php include('templates/mystery.php'); ?>
    </div>

    <!--Footer-->
    <?php include('templates/footer.html'); ?>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>