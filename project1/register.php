<?php
include "db.php";
$f_name=$_POST["f_name"];
$l_name=$_POST["l_name"];
$email=$_POST["email"];
$password  = ($_POST['password']);
$repassword= ($_POST['repassword']);
$mobile=$_POST["mobile"];
$adress1=$_POST["adress1"];
$adress2=$_POST["adress2"];
$name="/^[a-zA-Z][a-zA-Z ]+$/";
$emailValidation="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number="/^[0-9]+$/";
$flag=false;
if (empty($f_name)||empty($l_name)||empty($email)||empty($password)||empty($repassword)
    ||empty($mobile)||empty($adress1)||empty($adress2)){
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
    if (!preg_match($number, $mobile)) {
        echo "
                                    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b> nevaliden telefonen nomer: $mobile</b>
    </div>
      ";
        exit();
    }
    $sql="SELECT user_id FROM user_info WHERE email='$email' LIMIT 1";
    $check_query=mysqli_query($con,$sql);
    $count_email=mysqli_num_rows($check_query);
    if ($count_email>0){
        echo "
                                    <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
    <b> Email address is already available. Try another email address</b>
    </div>
       ";
        exit();
    }else{
        $password=md5($password);
        $sql="INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `adress1`, `adress2`) 
                VALUES (NULL, '$f_name', '$l_name', '$email', '$password', '$mobile', '$adress1', '$adress2')";
        $run_query=mysqli_query($con,$sql);
        if ($run_query){
            echo "
                                                <div class='alert alert-success'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
    <b> You are REGISTERED SECCESSFULLY!</b> 
            <a href=\"loginForm.php\">
        <button style=' width: auto;
            padding: 10px 18px;
            background-color: cornflowerblue;
            action'>LOGIN</button>
        </a>
    </div>
           ";
            $flag=true;

        }
    }
}
if ($flag){
}

?>