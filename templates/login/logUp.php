<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    //Checking is user existing in the database or not
    $query = "SELECT * FROM `user` WHERE username='$username' and password='" . md5($password) . "'";
    $result = mysqli_query($con, $query) or die(mysql_error()); //mysql_error()
    $rows = mysqli_num_rows($result);
    if ($rows == 1) {
        $_SESSION['username'] = $username;
        // Redirect user to login page
        header("Location: /Paper-Forest/loggedIn.php");
    } else {
        echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='../../index.php'>Home</a></div>";
    }
} else {
    ?>
    <div class="modal fade" id="logIn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Log In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="templates/login/logUp.php" method="post" name="login">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="username" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required />
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="form-group pb-3">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            <button class="btn btn-success" type="submit" name="submit">Log In</button>
                        </div>
                        <?php
                        if (isset($_POST['submit'])) {
                            header("Location: /Paper-Forest/index.php");
                        }
                        ?>
                </form>
            </div>
        </div>
    </div>

<?php } ?>