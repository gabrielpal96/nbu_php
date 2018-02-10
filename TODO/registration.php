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
            <a href="#" class="navbar-brand"><b>G@b4oo</b></a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="login.php"><b>LOGIN</b></a> </li>
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
                    REGISTRATION
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12" id="signum_msg">
<!--                            alert-->
                        </div>
                    </div>
                    <form method="post">
                    <div class="row">
                            <div class="col-md-6">
                                <label for="f_name"> First Name</label>
                                <input type="text" id="f_name" name="f_name" class="form-control">
                            </div>
                        <div class="col-md-6">
                            <label for="f_name"> Last Name</label>
                            <input type="text" id="f_name" name="l_name" class="form-control">
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <div   class="row">
                        <div class="col-md-12">
                            <label for="email"> Email</label>
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>
                    <div   class="row">
                        <div class="col-md-12">
                            <label for="password"> password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div   class="row">
                        <div class="col-md-12">
                            <label for="repassword">Re-enter password</label>
                            <input type="password" id="repassword" name="repassword" class="form-control">
                        </div>
                    </div>
                    <p><br/></p>
                    <div   class="row">
                        <div class="col-md-12">
                            <input style="float: right;" value="Sign up" type="button" id="signup_button" name="signup_button" class="btn btn-success btn-lg">
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