<?php
session_start();
if (isset($_SESSION["uid"])) {
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
        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
            action
        }



        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar navbar-header">
            <a href="index.php" class="navbar-brand">G@b4oo</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="registration.php">REGISTRATION</a> </li>
        </ul>
    </div>

</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<h2 style="text-align: center;">Login Form</h2>

<a action="/action_page.php">

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" id="email" placeholder="Enter Username" name="uname" required>

        <label><b>Password</b></label>
        <input type="password" id="password" placeholder="Enter Password" name="psw" required>

        <button type="submit" id="login">Login</button>
        <!--        <label>-->
        <!--            <input type="checkbox" checked="checked"> Remember me-->
        <!--        </label>-->
    </div>

    <div style="text-align: center;" class="container" style="background-color:#f1f1f1">
        <a href="index.php">
            <button class="cancelbtn">Cancel</button>
        </a>
        <!--        <span class="psw">Forgot <a href="#">password?</a></span>-->
    </div>
</a>
</form>
</body>
</html>