<?php
session_start();
if (!isset($_SESSION["uid"])){
    header("location:index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
    <div class="navbar navbar-header">
        <a href="#" class="navbar-brand">G@b4oo</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="profile.php">HOME</a> </li>
        <li><a href="profile.php">PRODUCT</a> </li>
        <li style="width: 300px;left: 10px;top: 10px;"><input type="text" class="form-control" id="search"> </li>
        <li style="top: 10px;left: 20px;"><button type="submit" class="btn btn-primary" id="search_btn">Search</button> </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-shopping-cart"></span>CART <span class="badge">0</span>
            </a>
        <div class="dropdown-menu" style="width: 400px;">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-3">S1.No</div>
                        <div class="col-md-3">Product image</div>
                        <div class="col-md-3">Product Name</div>
                        <div class="col-md-3">Price(lv)</div>
                    </div>
                </div>
                <div class="panel-body"
                <div id="cart_product">
                </div>
                <div class="panel-footer">
                    <form action="cartForm.php"  >
                    <button>
                          <a style="text-decoration: none;color: blue"><span class="glyphicon glyphicon-shopping-cart">Cart </a>
                    </button>
                    </form>
                </div>
            </div>
        </div>
        </li>

        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php
                echo "Hi, ";
                echo $_SESSION["name"];
                ?></a>
        <ul class="dropdown-menu">
            <li><a href="cartForm.php" style="text-decoration: none;color: blue"><span class="glyphicon glyphicon-shopping-cart">Cart </a></li>
            <li class="divider"></li>
<!--            <li><a href="" style="text-decoration: none;color: blue">Chnage Password</a></li>-->
            <li class="divider"></li>
            <li><a href="logout.php" style="text-decoration: none;color: blue">LOGOUT</a></li>
        </ul>
        </li>

    </ul>
</div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <div class="nav nav-pills nav-stacked">
                <div id="get_category"></div>
            </div>
                <div class="nav nav-pills nav-stacked">
                    <div id="get_brand"></div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12" id="product_msg">
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">Products</div>
                <div class="panel-body">
                    <div id="get_product">

                    </div>
<!--                    <div class="col-md-4">-->
<!--                        <div class="panel panel-info">-->
<!--                            <div class="panel-heading"> samsung</div>-->
<!--                            <div class="panel-body">-->
<!--                                <img style="height: 300px;width: 300px;" src="product_images/6954588583_baede2f9e0_o.jpg"/>-->
<!--                            </div>-->
<!--                            <div class="panel-heading">500 lv-->
<!--                            <button style="float:right" class="btn btn-danger btn-xs">AddToCart</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="panel-footer">&copy;2018</div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
<!--    INSERT INTO `products1` (`product_id`, `product_cat`, `proct_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES (NULL, '1', '1', 'apple test', '555', 'apple test 1 ', 'alfa.JPG', 'apple test ');-->
</div>
</body>
</html>


