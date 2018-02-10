<?php
include "db.php";
$f_name=$_POST["f_name"];
$l_name=$_POST["l_name"];
$email=$_POST["email"];
$password  = ($_POST['password']);
$repassword= ($_POST['repassword']);
$name="/^[a-zA-Z][a-zA-Z ]+$/";
$emailValidation="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number="/^[0-9]+$/";
$flag=false;
if (empty($f_name)||empty($l_name)||empty($email)||empty($password)||empty($repassword)){
    echo "
    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b>Please fill all fields!</b>
    </div>
    ";
    exit();
}else {
    if (!preg_match($name, $f_name)) {
        echo "
            <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b>$f_name is not valid</b>
    </div>
        ";
        exit();
    }
    if (!preg_match($name, $l_name)) {
        echo "
                    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b>$l_name is not valid</b>
    </div>
        ";
        exit();
    }
    if (!preg_match($emailValidation, $email)) {
        echo "
                            <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b> $email adress is not valid</b>
    </div>
     ";
        exit();
    }
    if ($password != $repassword) {
        echo "
                                    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b> ne suvpadat parolite</b>
    </div>
        ";
        exit();
    }
    $sql = "SELECT user_id FROM user WHERE email='$email' LIMIT 1";
    $check_query = mysqli_query($con, $sql);
    $count_email = mysqli_num_rows($check_query);
    if ($count_email > 0) {
        echo "
                                    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
    <b> Email address is already available. Try another email address</b>
    </div>
       ";
        exit();
    } else {
        $password = md5($password);

        $sql = "INSERT INTO `user` (`user_id`, `furst_name`, `last_name`, `email`, `password`) VALUES (NULL, '$f_name', '$l_name', '$email', '$password');";
        $run_query = mysqli_query($con, $sql);
        if ($run_query) {
            echo ">
        <button style=' width: auto;
            padding: 10px 18px;
            background-color: cornflowerblue;
            action'>LOGIN</button>
        </a>
    </div>
           ";
        }
    }
}
?>