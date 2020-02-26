<!--Fiction-->

<div class="tab-pane fade" id="pills-fiction" role="tabpanel" aria-labelledby="pills-fiction-tab">
<div class="container">
    <div class="row">
        <?php
        $result = mysqli_query($con, "SELECT * FROM `books` WHERE `category`='fiction'"); 
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col col-md-6 col-lg-4">
            <form method="post" action="cart.php">
            <div class="container fix">
                <div class="card shadow" style="width: 18rem;">
                    <input type="hidden" name="title" value='.$row['title'].' />
                    <img src="' . $row['image'] . '" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-1">'.str_replace("-"," ",$row['title']).'</h5>';
                        if($_SESSION['username'] == '') {
                            echo '<a class="nav-link btn btn-outline-success" href="#" data-toggle="modal" data-remote="myRemoteURL.do" data-target="#logIn"><i class="fas fa-cart-plus"></i> Add to cart</a>';
                        } else{
                            echo '<button type="submit" class="btn btn-outline-success"><i class="fas fa-cart-plus"></i> Add to cart</button>';
                        }
            echo '  </div>
                </div>
            </div>
            </form>
        </div>';
        }
        ?>
    </div>
</div>
</div>