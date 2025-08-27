<nav class="navbar fixed-top navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand logo">NexCart</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
                        Products
                    </a>
                    <div class="dropdown-menu">
                        <a href="products.php#watch" class="dropdown-item">Watches</a>
                        <a href="products.php#shirt" class="dropdown-item">T-Shirts</a>
                        <a href="products.php#shoes" class="dropdown-item">Shoes</a>
                        <a href="products.php#headphones" class="dropdown-item">Headphones/Speakers</a>
                    </div>
                </li>
                <li class="nav-item"><a href="index.php" class="nav-link">Offers</a></li>
                <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
                <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
                    <?php
                }
                ?>
            </ul>

            <?php
            if (isset($_SESSION['email'])) {
                ?>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a href="logout_script.php" class="nav-link"><i
                                class="fa fa-sign-out"></i>Logout</a></li>
                    <li class="nav-item"><a class="nav-link " data-placement="bottom" data-toggle="popover"
                            data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i
                                class="fa fa-user-circle "></i></a></li>
                </ul>
                <?php
            } else {
                ?>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="signup.html" class="nav-link">
                            <i class="fa fa-user">
                            </i>
                            sign Up
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="login.html" class="nav-link ">
                            <i class="fa fa-sign-in"></i>
                            Login
                        </a>
                    </li>
                </ul>
                <?php
            }
            ?>
        </div>
    </div>
</nav>