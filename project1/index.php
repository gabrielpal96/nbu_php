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
            </div>

                <div class="nav nav-pills nav-stacked">
                    <div id="get_brand"></div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-info">
                <div class="panel-heading">Products</div>
                <div class="panel-body">
                    <div id="get_product">

                    </div>

                </div>
                <div class="panel-footer">&copy;2018</div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
</body>
</html>
