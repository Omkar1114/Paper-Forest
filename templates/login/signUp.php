<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    // $trn_date = date("Y-m-d H:i:s");
    $query = "INSERT into `user` (username, password, email)
VALUES ('$username', '" . md5($password) . "', '$email')";
    $result = mysqli_query($con, $query);
    $_SESSION['username'] = $username;
    if ($result) {
        header("Location: /Paper-Forest/index.php");
    }
} else {
    ?>
    <!-- Modal Sign-Up -->
    <div class="modal fade" id="signUp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign Up</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form name="registration" action="templates/login/signUp.php" method="post">
                <div class="modal-body">                   
                        <div class="form-group">
                            <label for="username">Username</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" name="username" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope"></i></i></span>
                                </div>
                                <input type="email" class="form-control" name="email" id="inputemail" aria-describedby="emailHelp" placeholder="Enter email" required>
                            </div>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Sign Up</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<?php } ?>