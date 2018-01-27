<?php

session_start();
if (($_SESSION["uid"])!=1){
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
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

    </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar navbar-header">
            <a href="../index.php" class="navbar-brand">G@b4oo</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="../index.php">HOME</a> </li>
            <li><a href="../index.php">PRODUCT</a> </li>
        </ul>
    </div>

</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>

<h2 style="text-align: center;">ADMIN PANEL</h2>
<h3 style="text-align: center;">All USER</h3>
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
                    <div class="row" >
                        <div class="col-md-2"><b>No:</b></div>
                        <div class="col-md-2"><b>User id</b></div>
                        <div class="col-md-2"><b>first name</b></div>
                        <div class="col-md-2"><b>last name</b></div>
                        <div class="col-md-2"><b>email</b></div>
                        <div class="col-md-2"><b>Action</b></div>
                    </div>
                    <hr/>
                    <div id="get_user"></div>

                </div>

                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>
