<?php
session_start();
if (isset($_SESSION["uid"])){
    header("location:profile.php");
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
        <li><a href="index.php">HOME</a> </li>
        <li><a href="index.php">PRODUCT</a> </li>
        <li style="width: 300px;left: 10px;top: 10px;"><input type="text" class="form-control" id="search"> </li>
        <li style="top: 10px;left: 20px;"><button type="submit" class="btn btn-primary" id="search_btn">Search</button> </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="loginForm.php" ><span class="glyphicon glyphicon-user"></span>LOGIN</a>
<!--        <ul class="dropdown-menu">-->
<!--            <div style="width: 300px;">-->
<!--                <div class="panel panel-primary">-->
<!--                    <div class="panel-primary">Login</div>-->
<!--                    <div class="panel-heading">-->
<!--                        <label for="email">Email</label>-->
<!--                        <input type="email" class="form-control" id="email"required/>-->
<!--                        <label for="email">Password</label>-->
<!--                        <input type="password" class="form-control" id="password" required/>-->
<!--                        <p><br/></p>-->
<!--                        <a href="#" style="color: white; list-style: none;">Forgotten Password</a>-->
<!--                        <input type="submit" class="btn btn-success" style="float:right; "id="login" value="Login">-->
<!--                    </div>-->
<!--                    <div class="panel-footer" id="e_msg"></div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        </ul>-->
        </li>
        <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span>REGISTRATION</a> </li>
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
<!--                <li class="active"><a href="#"><h4>Categories</h4></a> </li>-->
<!--                <li><a href="#">Categories</a> </li>-->
<!--                <li><a href="#">Categories</a> </li>-->
<!--                <li><a href="#">Categories</a> </li>-->
<!--                <li><a href="#">Categories</a> </li>-->

            </div>

                <div class="nav nav-pills nav-stacked">
                    <div id="get_brand"></div>
<!--                <li class="active"><a href="#"><h4>Brand</h4></a> </li>-->
<!--                <li><a href="#">Categories</a> </li>-->
<!--                <li><a href="#">Categories</a> </li>-->
<!--                <li><a href="#">Categories</a> </li>-->
<!--                <li><a href="#">Categories</a> </li>-->

            </div>
        </div>
        <div class="col-md-8">
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
