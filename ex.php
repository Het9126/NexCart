<div class="row text-center" id="watch">
                    <div class="col-md-3 col-6 py-2">
                        <div class="card">
                            <img src="img/watch1.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Guess 1875</h6>
                                <h6>Price: Rs 3000</h6>
                                <?php
                                if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary text-white">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(1)) {
                                        echo '<p><a href="#" class="btn btn-secondary text-white" disable>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=1" name="add" value="add"
                                                class="btn btn-secondary text-white">Add
                                                to
                                                cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-2">
                        <div class="card">
                            <img src="img/watch2.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Guest Watch</h6>
                                <h6>Price :Rs 2500</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(2)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=2" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to
                                                cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-2">
                        <div class="card">
                            <img src="img/watch3.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Panerai Watch</h6>
                                <h6>Price :Rs 3500</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(3)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=3" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to
                                                cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-2">
                        <div class="card">
                            <img src="img/watch4.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Nonos Watch</h6>
                                <h6>Price :Rs 1800</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(4)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=4" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-2">
                        <div class="card">
                            <img src="img/watch5.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Rolex Watch</h6>
                                <h6>Price :Rs 10000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(5)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=5" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-2">
                        <div class="card">
                            <img src="img/watch6.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Rado Watch</h6>
                                <h6>Price :Rs 7000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(6)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=6" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-2">
                        <div class="card">
                            <img src="img/watch7.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Titan Watch</h6>
                                <h6>Price :Rs 10000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(7)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=7" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-2">
                        <div class="card">
                            <img src="img/watch8.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Patek Philippe Watch</h6>
                                <h6>Price :Rs 25000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(8)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=8" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center" id="shirt">
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shirt1.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Levis</h6>
                                <h6>Price :Rs 1800</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(9)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=9" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to
                                                cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shirt2.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Louis Philippe t-shirt</h6>
                                <h6>Price :Rs 2500</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(10)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=10" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to
                                                cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shirt3.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Highlander t-shirt</h6>
                                <h6>Price :Rs 1000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(11)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=11" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to
                                                cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shirt4.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>GUCCI White t-Shirt</h6>
                                <h6>Price :Rs 2300</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(12)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=12" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to
                                                cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shirt5.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>US POLO t-Shirt</h6>
                                <h6>Price :Rs 2700</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(13)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=13" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to
                                                cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shirt6.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Tommy Hilfiger t-Shirt</h6>
                                <h6>Price :Rs 2300</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(14)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=14" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to
                                                cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shirt7.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Arrow New York t-Shirt</h6>
                                <h6>Price :Rs 1200</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(15)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=15" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to
                                                cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shirt8.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Allen Solly t-Shirt</h6>
                                <h6>Price :Rs 1500</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(16)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=16" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to
                                                cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center" id="shoes">
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shoe1.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Nike White Sneaker</h6>
                                <h6>Price :Rs 8000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(17)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=17" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to
                                                cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shoe2.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Nike White Shoes</h6>
                                <h6>Price :Rs 7500</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(18)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=18" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shoe3.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Nike Yellow Sneaker</h6>
                                <h6>Price :Rs 7000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(19)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p><a href="cart-add.php?id=19" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shoe4.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Nike Sneaker</h6>
                                <h6>Price :Rs 6000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(20)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=20" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shoe5.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Adidas Ultraboost</h6>
                                <h6>Price :Rs 10800</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(21)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=21" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shoe6.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Adidas Sneaker</h6>
                                <h6>Price :Rs 9000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(22)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=22" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shoe7.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Campus Running</h6>
                                <h6>Price :Rs 4000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(23)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=23" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/shoe8.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Adidas Switch Move Running Shoes</h6>
                                <h6>Price :Rs 6000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add To
                                            Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(24)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=24" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center" id="headphones">
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sp1.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Beats Headphone</h6>
                                <h6>Price :Rs 22,500</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(25)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=25" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sp2.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Zolo Headphone</h6>
                                <h6>Price :Rs 4500</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(26)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=26" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sp3.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Sony Speaker</h6>
                                <h6>Price :Rs 10,500</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(27)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=27" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sp4.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Airpods</h6>
                                <h6>Price :Rs 15,000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(28)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=28" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sp5.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>LG</h6>
                                <h6>Price :Rs 15,000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(29)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=29" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sp6.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Sony headphones</h6>
                                <h6>Price :Rs 20,000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(30)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=30" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sp7.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Apple headphones</h6>
                                <h6>Price :Rs 25,000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(31)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=31" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sp8.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Boat headphones</h6>
                                <h6>Price :Rs 12,000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(32)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=32" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center" id="sunglasses">
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sg1.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Ray Ban round sunglasses</h6>
                                <h6>Price :Rs 10,000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(33)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=33" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sg2.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Lenskart square sunglasses</h6>
                                <h6>Price :Rs 3000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(44)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=34" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sg3.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Titan square sunglasses</h6>
                                <h6>Price :Rs 1200</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(35)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=35" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sg4.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Titan round sunglasses</h6>
                                <h6>Price :Rs 2500</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(36)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=36" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sg5.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Polo Ralph Lauren square sunglasses</h6>
                                <h6>Price :Rs 12,000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(37)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=37" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sg6.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Polo Ralph Lauren round sunglasses</h6>
                                <h6>Price :Rs 15,000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(38)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=38" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sg7.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Ray Ban square sunglasses</h6>
                                <h6>Price :Rs 8,000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(39)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=39" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/sg8.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Lenskart round sunglasses</h6>
                                <h6>Price :Rs 5,000</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(40)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=40" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center" id="caps">
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/cap1.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Black cap</h6>
                                <h6>Price :Rs 500</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(41)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=41" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/cap2.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Blue cap</h6>
                                <h6>Price :Rs 300</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(42)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=42" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/cap3.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Red cap</h6>
                                <h6>Price :Rs 250</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(43)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        </p><a href="cart-add.php?id=43" name="add" value="add"
                                            class="btn btn-secondary  text-white">Add
                                            to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/cap4.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Grey cap</h6>
                                <h6>Price :Rs 400</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(44)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=44" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/cap5.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Orange</h6>
                                <h6>Price :Rs 200</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(45)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=45" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/cap6.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>White</h6>
                                <h6>Price :Rs 500</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(46)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=46" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/cap7.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Black and Green cap</h6>
                                <h6>Price :Rs 600</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(47)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=47" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="img/cap8.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>White and Green cap</h6>
                                <h6>Price :Rs 600</h6>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php#login" role="button" class="btn btn-secondary  text-white ">Add
                                            To Cart</a>
                                    </p>
                                    <?php
                                } else {
                                    if (check_if_added_to_cart(48)) {
                                        echo '<p><a href="#" class="btn btn-secondary  text-white" disabled>Added to cart</a></p>';
                                    } else {
                                        ?>
                                        <p> <a href="cart-add.php?id=48" name="add" value="add"
                                                class="btn btn-secondary  text-white">Add
                                                to cart</a></p>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>