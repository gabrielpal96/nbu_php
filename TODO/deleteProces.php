<?php
session_start();
include 'db.php';
if (!isset($_SESSION["uid"])){
    header("location:login.php");
}else{
    $id=$_GET["val"];
    echo $id;
$sql=    "DELETE FROM `todo` WHERE `todo`.`TODO_id` = $id";
$run_query=mysqli_query($con,$sql);
if ($run_query){
    header("location:index.php");
}

}


?>