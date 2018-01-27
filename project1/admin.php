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
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>
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
            <li><a href="index.php">HOME</a> </li>
            <li><a href="index.php">PRODUCT</a> </li>
        </ul>
    </div>

</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>

<h2 style="text-align: center;">ADMIN PANEL</h2>
<div style="text-align: center;">
<a  href="admin/allUser.php" >
    <button >
<h3 >All USER</h3>
    </button>
</a>
</div>  

<p><br/></p>
<p><br/></p>
<p><br/></p>

</body>
</html>
