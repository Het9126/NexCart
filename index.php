<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Shopping Site for Men</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include 'includes/header.php';
    include 'includes/check-if-added.php';
    ?>
    <section class="main-section">
        <div class="top">
            <div class="top-images">
                <p class="top-logo">NexCart</p>
                <h1 class="top-txt">Be Fashionable</h1>
                <img src="img/top7.png" alt="" class="pro-img7">
                <img src="img/top1.png" alt="" class="pro-img1">
                <img src="img/top2.png" alt="" class="pro-img2">
                <img src="img/top3.png" alt="" class="pro-img3">
                <img src="img/top4.png" alt="" class="pro-img4">
                <img src="img/top5.png" alt="" class="pro-img5">
                <img src="img/top6.png" alt="" class="pro-img6">
            </div>

        </div>

    </section>
    <div class="pcontainer">
        <div class="product">
            <div class="product-card ">
                <h2 class="name">Watches</h2>
                <a class="popup-btn">Details</a>
                <img src="img/1.png" class="product-img" alt="">
            </div>
            <div class="popup-view">
                <div class="popup-card">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="product-img">
                        <img src="img/1.png" alt="">
                    </div>
                    <div class="info">
                        <h2>Watches<br><span>Men's Fashion</span></h2>
                        <p>Quantity: 8 <br>Brands: Patek Philippe, Rolex, Rado, Titan, Panerai, Nonos, Guest, Guess
                            <br>Price range: 1,800-25,000</p>
                        <a href="products.php#watch" class="add-cart-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="product-card">
                <h2 class="name">Tshirts</h2>
                <a class="popup-btn">Details</a>
                <img src="img/2.png" class="product-img" alt="">
            </div>
            <div class="popup-view">
                <div class="popup-card">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="product-img">
                        <img src="img/2.png" alt="">
                    </div>
                    <div class="info">
                        <h2>Tshirts<br><span>Men's Fashion</span></h2>
                        <p>Quantity: 8 <br>Brands: Levis, Louis Philippe, Highlander, GUCCI, US POLO, Tommy Hilfiger,
                            Arrow New York, Allen Solly<br>Price range: 1,000-2,700</p>
                        <a href="products.php#shirt" class="add-cart-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="product-card">
                <h2 class="name">Shoes</h2>
                <a class="popup-btn">Details</a>
                <img src="img/3.png" class="product-img" alt="">
            </div>
            <div class="popup-view">
                <div class="popup-card">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="product-img">
                        <img src="img/3.png" alt="">
                    </div>
                    <div class="info">
                        <h2>Shoes<br><span>Men's Fashion</span></h2>
                        <p>Quantity: 8 <br>Brands: Nike, adidas, Campus<br>Price range: 4,000-11,000</p>
                        <a href="products.php#shoes" class="add-cart-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="product-card">
                <h2 class="name">Headphones</h2>
                <a class="popup-btn">Details</a>
                <img src="img/4.png" class="product-img" alt="">
            </div>
            <div class="popup-view">
                <div class="popup-card">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="product-img">
                        <img src="img/4.png" alt="">
                    </div>
                    <div class="info">
                        <h2>Headphones<br><span>Men's Fashion</span></h2>
                        <p>Quantity: 8 <br>Brands: Beats, Zolo, Sony, Airpods, Apple, Boat, LG<br>Price range:
                            10,500-25,000</p>
                        <a href="products.php#headphone" class="add-cart-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="product-card">
                <h2 class="name">Sunglasses</h2>
                <a class="popup-btn">Details</a>
                <img src="img/5.png" class="product-img" alt="">
            </div>
            <div class="popup-view">
                <div class="popup-card">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="product-img">
                        <img src="img/5.png" alt="">
                    </div>
                    <div class="info">
                        <h2>Sunglasses<br><span>Men's Fashion</span></h2>
                        <p>Quantity: 8 <br>Brands: Ray Ban, Lenskart, titan, Polo Ralph Lauren<br>Price range:
                            1,200-15,000</p>
                        <a href="products.php#sunglasses" class="add-cart-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="product-card">
                <h2 class="name">Caps</h2>
                <a class="popup-btn">Details</a>
                <img src="img/6.png" class="product-img" alt="">
            </div>
            <div class="popup-view">
                <div class="popup-card">
                    <a><i class="fas fa-times close-btn"></i></a>
                    <div class="product-img">
                        <img src="img/6.png" alt="">
                    </div>
                    <div class="info">
                        <h2>Caps<br><span>Men's Fashion</span></h2>
                        <p>Quantity: 8 <br>Price range: 250-600</p>
                        <a href="products.php#caps" class="add-cart-btn">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include 'includes/footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
    integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
    crossorigin="anonymous"></script>
<script src="script.js"></script>
<script>
    $(document).ready(function () {
        $('[data-toggle="popover"]').popover();
    });
    $(document).ready(function () {

        if (window.location.href.indexOf('#login') != -1) {
            $('#login').modal('show');
        }

    });
</script>
<?php if (isset($_GET['error'])) {
    $z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>

<?php if (isset($_GET['errorl'])) {
    $z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>

</html>