<?php
require('templates/login/db.php');
session_start();
$search = str_replace(" ","-",$_POST['search']);
$searchData = mysqli_query(
    $con,
    "SELECT * FROM `books` WHERE `title` LIKE '%".$search."%'"
);
$count = mysqli_num_rows($searchData);
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


    
<div class="container">
<div class="row">
<?php
if($count == 0) {
    echo "No result found";
} else {
    while ($row = mysqli_fetch_assoc($searchData)) {
        echo '<div class="col col-md-6 col-lg-4">
        <form method="post" action="cart.php">
        <div class="container fix">
            <div class="card shadow" style="width: 18rem;">
                <input type="hidden" name="title" value='.$row['title'].' />
                <img src="' . $row['image'] . '" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title pb-1">'.str_replace("-"," ",$row['title']).'</h5>';
                    if($_SESSION['username'] == '') {
                        echo '<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#searchModal"><i class="fas fa-cart-plus"></i> Add to cart</button>';
                    } else{
                        echo '<button type="submit" class="btn btn-outline-success"><i class="fas fa-cart-plus"></i> Add to cart</button>';
                    }
        echo '  </div>
            </div>
        </div>
        </form>
    </div>';
    }
}
?>

</div>
</div>

<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="searchModalLabel">Log In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Log In before adding to cart
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
