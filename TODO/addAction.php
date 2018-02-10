<?php
include "db.php";
session_start();
if (isset($_SESSION["uid"])){
    header("location:login.php");
}

$title=$_POST["title"];
$text=$_POST["text"];
$uid=$_SESSION["uid"];
date_default_timezone_set("Europe/Sofia");
$data=date("Y-m-d h:i:sa");
$sql="INSERT INTO `todo` (`TODO_id`, `user_id`, `title`, `text`, `date`) VALUES (NULL, '$uid', '$title', '$text', '$data');";
$run_query = mysqli_query($con, $sql);
//if ($run_query){

//}
?>