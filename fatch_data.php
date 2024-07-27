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