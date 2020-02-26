<?php
session_start();
include('templates/login/db.php');
$username = $_SESSION['username'];

if (isset($_POST['delete'])) {
    $title = $_POST['title'];
    $deleteData = "DELETE FROM `cart` WHERE `title`='$title' AND `username`='$username'";
    $retval = mysqli_query($con, $deleteData);
    if (!$retval) {
        die('Could not delete data: ' . mysql_error());
    }
}
?>

<!-- Cart List -->
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

    <!-- nav -->
    <nav class="navbar navbar-dark bg-primary px-4 ">
        <a class="navbar-brand pl-2" href="loggedIn.php"><h3>Paper Forest</h3></a>
        <div class="" id="mainNavbar">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item active ">
              <a class="nav-link" href="#"><h3 class="about">Kart</h3><span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
    </nav>

    <!-- Content -->
<div class="container footFix">
    <div class="row">
        <?php
        $getData = mysqli_query($con, "SELECT * FROM `cart` WHERE `username`='$username'");
        $count = mysqli_num_rows($getData);
        if($count == 0) {
        ?>
            <div class="justify-text-center container align-text-center">
            <?php echo '<h1 class="display-5 text-center mt-5 pt-5 "><i class="fas fa-bookmark text-secondary"></i>  Your cart is empty</h1>'; ?>
            </div>
        <?php
        } else {
        while ($row = mysqli_fetch_assoc($getData)) {
            echo '<div class="col-md-12 col-lg-6">
                    <form method="post" action="">
                    <div class="shadow card mb-3" style="max-width: 540px;">
                        <input type="hidden" name="title" value='.$row['title'].' />
                        <div class="row no-gutters">
                          <div class="col-md-4">
                            <img class="shadow" src="' . $row['image'] . '" class="card-img" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h4 class="card-title pb-1">'.str_replace("-"," ",$row['title']).'</h4>
                              <p class="text-black-50">Category : lorem</p>
                              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione, odio.</p>
                              <button name="delete" type="submit" class="btn btn-outline-danger mt-4"><i class="fas fa-trash-alt"></i> Remove</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      </form>
                </div>';
        }
        }
        ?>
    </div>
</div>


<!-- in -->

<!-- Footer -->
<?php include('templates/footer.html');?>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        

              
               



                <!-- <div class="col col-md-6 col-lg-4">
            <form method="post" action="">
            <div class="container fix">
                <div class="card shadow" style="width: 18rem;">
                    <input type="hidden" name="title" value='.$row['title'].' />
                    <img src="' . $row['image'] . '" class="card-img" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-1">'.str_replace("-"," ",$row['title']).'</h5>
                        <button name="delete" type="submit" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i>Remove</button>
                    </div>
                </div>
            </div>
            </form>
        </div> -->