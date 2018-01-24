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
        <li><a href="#">PRODUCT</a> </li>
    </ul>
</div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8" id="cart_msg">
<!--    cart message        -->
        </div>
        <div class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading">Cart checkout</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-2"><b>Product Image</b></div>
                        <div class="col-md-2"><b>Product Name</b></div>
                        <div class="col-md-2"><b>Product Price</b></div>
                        <div class="col-md-2"><b>Quantity</b></div>
                        <div class="col-md-2"><b>Price in лв.</b></div>
                        <div class="col-md-2"><b>Action</b></div>
                    </div>
                    <hr/>
                    <div id="cart_checkout"></div>

                </div>

                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

</body>
</html>
