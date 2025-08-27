<?php
require "includes/common.php";
if (isset($_POST["action"])) {
    $query = "SELECT * FROM products WHERE product_status = '1'";
    if (isset($_POST["category"])) {
        $brand_filter = implode("','", $_POST["category"]);
        $query = "AND category IN ('" . $brand_filter . "')";
        $output = '';
        $result = mysqli_query($con, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $output .= '<div class="col-md-3 col-6 py-2">
                        <div class="card">
                            <img src="' . $row['product_image'] . '" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>' . $row['name'] . '</h6>
                                <h6>Price :' . $row['price'] . '</h6>
                                        <p><a href="cart-add.php?id=2" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to
                                                cart</a></p>
                                    }
                            </div>
                        </div>
                    </div>';
        }
    } else {
        $output = '<h3>No Data Found</h3>';
    }
    header("content-type: product_image/jpg");
    echo $output;
}
?>

<!-- <div class="login" id="login">
    <div class="lg-img">
        <img class="lg-img-1" src="img/2.png" alt="">
        <img class="lg-img-3" src="img/3.png" alt="">
        <img class="lg-img-2" src="img/1.png" alt="">
    </div>
    <div class="lgin">
        <h2>Login</h2>
        <form class="flgin" action="login_script.php" method="post">
            <div class="form-group lge">
                <label for="email">Email address:</label><br>
                <input type="email" class="form-control" name="lemail" placeholder="Enter email" required>
            </div>
            <div class="form-group lgp">
                <label for="pwd">Password:</label><br>
                <input type="password" class="form-control" id="pwd" name="lpassword" placeholder="Password" required>
            </div>
            <div class="form-check lgc">
                <input type="checkbox" class="form-check-input" required>
                <label for="checkbox" class="form-check-label">Agree terms and Condition</label>
            </div>
            <button type="submit" class="btn" name="Submit">Login</button>
        </form>
        <a href="http://">forgot password ?</a>
        <p class="mr-auto">New User?<a href="#signup" data-toggle="modal" data-dismiss="modal">signup</a></p>
    </div>
</div> -->

<!-- <div class="signup" id="signup">
        <div class="siup">
            <h2>SignUp</h2>
            <form class="fsiup" action="signup_script.php" method="post">
                <div class="form-group sue">
                    <label for="email">Email address:</label><br>
                    <input type="email" class="form-control" name="eMail" placeholder="Enter email" required>
                </div>
                <div class="form-group sup">
                    <label for="pwd">Password:</label><br>
                    <input type="password" name="password" id="pwd" class="form-control" placeholder="Password"
                        required>
                </div>
                <div class="form-row sun">
                    <div class="form-group col-md-6">
                        <label for="validation1">First Name:</label>
                        <input type="text" name="firstName" id="validation1" class="form-control"
                            placeholder="Firat Name" required>
                    </div>
                    <div class="form-group col-md -6">
                        <label for="validation2">Last Name</label>
                        <input type="text" class="form-control" id="validation2" name="lastName"
                            placeholder="Last Name">
                    </div>
                </div>
                <div class="form-check suc">
                    <input type="checkbox" class="form-check-inpute" required>
                    <label for="checkbox" class="form-check-lable">Agree terms and Condition</label>
                </div>
                <button type="submit" class="btn btn-primary btn-block" name="Submit">Sign Up</button>
            </form>
            <div class="modal-footer">
                <p class="mr-auto">Already Registered? <a href="#login" data-toggle="modal" data-dismiss="modal">Login</a></p>
            </div>
        </div>
        <div class="su-img">
            <img class="su-img-1" src="/img/top2.png" alt="">
            <img class="su-img-3" src="/img/top3.png" alt="">
            <img class="su-img-2" src="/img/top1.png" alt="">
        </div>
    </div> -->



<!-- <div class="modal fade" id="login">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="login_script.php" method="post">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="lemail" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="lpassword" placeholder="Password"
                            required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label for="checkbox" class="form-check-label">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-block" name="Submit">Login</button>
                </form>
                <a href="http://">forgot password ?</a>
            </div>
            <div class="modal-footer">
                <p class="mr-auto">New User? <a href="#signup" data-toggle="modal" data-dismiss="modal">signup</a>
                </p>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="signup">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: rgba(255,255,255,0.95)">
            <div class="modal-header">
                <h5 class="modal-title">Sign up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="signup_script.php" method="post">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="eMail" placeholder="Enter email" required>
                        <?php if (isset($_GET['error'])) {
                            echo "<span class='text-danger'" . $_GET['error'] . "</span>";
                        } ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" name="password" id="pwd" class="foem-control" placeholder="Password"
                            required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="validation1">First Name:</label>
                            <input type="text" name="firstName" id="validation1" class="form-control"
                                placeholder="Firat Name" required>
                        </div>
                        <div class="form-group col-md -6">
                            <label for="validation2">Last Name</label>
                            <input type="text" class="form-control" id="validation2" name="lastName"
                                placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-inpute" required>
                        <label for="checkbox" class="form-check-lable">Agree terms and Condition</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="Submit">Sign Up</button>
                </form>
            </div>
            <div class="modal-footer">
                <p class="mr-auto">Already Registered?<a href="#login" data-toggle="modal"
                        data-dismiss="modal">Login</a></p>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div> -->