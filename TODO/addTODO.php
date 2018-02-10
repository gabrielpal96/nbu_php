<?php
session_start();
if (!isset($_SESSION["uid"])){
    header("location:login.php");
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
        </ul>
    </div>

</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<div class="container-fluid">
    <div class="row">
        <div    class="col-md-2"></div>
        <div class="col-md-8" id="signum_msg">
        </div>
        <div    class="col-md-2"></div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    add todo
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12" id="signum_msg">
                            <!--                            alert-->
                        </div>
                    </div>
                    <form method="post" action="addTODO.php">
                        <div   class="row">
                            <div class="col-md-12">
                                <label for="title"> title</label>
                                <input type="text" id="title" name="title" class="form-control">
                            </div>
                        </div>
                        <div   class="row">
                            <div class="col-md-12">
                                <label for="text"> text</label>
                                <input type="text" id="text" name="text" class="form-control">
                            </div>
                        </div>
                        <p><br/></p>
                        <div   class="row">
                            <div class="col-md-12">
                                <input style="float: right;" value="addTODO" type="addTODO" id="addTODO" name="addTODO" class="btn btn-success btn-lg">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer"></div>

            </div>
        </div>
        <div class="col-md-1"></div>

    </div>


</div>
</body>
</html>