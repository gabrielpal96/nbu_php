<?php
include "db.php";
session_start();
if (isset($_POST["userLogin"])){
    $email= mysqli_real_escape_string($con,$_POST["userEmail"]);
    $password= md5($_POST["userPassword"]);
    $sql="SELECT * FROM user WHERE email='$email' AND password='$password'";
    $run_query=mysqli_query($con,$sql);
    $count=mysqli_num_rows($run_query);
    if  ($count==1){
//        echo "test";
        $row=mysqli_fetch_array($run_query);
        $_SESSION["uid"]=$row["user_id"];
        $_SESSION["name"]=$row["furst_name"];
        echo "tretsadasdasde";
    }

}

?>