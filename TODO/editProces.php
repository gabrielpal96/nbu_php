<?php
session_start();
include 'db.php';
if (!isset($_SESSION["uid"])){
    header("location:login.php");
}else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id= $_GET["id"];
        $title = $_POST["title"];
        $text = $_POST["text"];
        $sql = "UPDATE `todo` SET `title` = '$title', `text` = '$text' WHERE `todo`.`TODO_id` = '$id'";
        $run_query = mysqli_query($con, $sql);
        echo "<script>
        alert('edited');
        </script>";
        header("location:index.php");
    } else {
        $id = $_GET["val"];
        $_SESSION["id"]=$id;
        $sql = "SELECT * FROM `todo` WHERE TODO_id='$id'";
        $run_query = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($run_query);
        $title = $row["title"];
        $text = $row["text"];

        echo "
    <!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Store</title>
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\"/>
    <script src=\"js/jquery.js\"></script>
    <script src=\"js/bootstrap.min.js\"></script>
    <script src=\"main.js\"></script>
</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container-fluid\">
        <div class=\"navbar navbar-header\">
            <a href=\"#\" class=\"navbar-brand\">G@b4oo</a>
        </div>
        <ul class=\"nav navbar-nav\">
            <li><a href=\"index.php\">HOME</a> </li>
        </ul>
    </div>

</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div    class=\"col-md-2\"></div>
        <div class=\"col-md-8\" id=\"signum_msg\">
        </div>
        <div    class=\"col-md-2\"></div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-3\"></div>
        <div class=\"col-md-6\">
            <div class=\"panel panel-primary\">
                <div class=\"panel-heading\">
                   edit todo
                </div>
                <div class=\"panel-body\">
                    <div class=\"row\">
                        <div class=\"col-md-12\" id=\"signum_msg\">
                            <!--                            alert-->
                        </div>
                    </div>
                    <form method=\"post\" action='editProces.php?id=$id'>
                        <div   class=\"row\">
                            <div class=\"col-md-12\">
                                <label for=\"title\"> title</label>
                                <input type=\"text\" id=\"title\" name=\"title\" value='$title' class=\"form-control\">
                            </div>
                        </div>
                        <div   class=\"row\">
                            <div class=\"col-md-12\">
                                <label for=\"text\"> text</label>
                                <br>
                                <textarea type=\"text\" id=\"text\"  name=\"text\" rows=\"4\" cols=\"50\"> $text
                                </textarea>
<!--                                <input type=\"text\" id=\"text\" name=\"text\" class=\"form-control\">-->

                            </div>
                        </div>
        
                        <div   class=\"row\">
                            <div class=\"col - md - 12\">";

        echo "
                            </div>
                        </div>
        
                              
                        <p><br/></p>
                        <div   class=\"row\">
                            <div class=\"col-md-12\">
                                <input style=\"float: right;\" value=\"submit\" type=\"submit\" id=\"submit\" name=\"submit\" class=\"btn btn-success btn-lg\">
                                <div>
                                <a href='index.php'><button class=\"btn btn-success btn-lg\" >cancel</button> </a>
                                </div>
                            </div>
                            <div class=\"col-md-12\">
                            </div>
                        </div>
                        
                    </form>
                </div>
                <div class=\"panel-footer\"></div>

            </div>
        </div>
        <div class=\"col-md-1\"></div>

    </div>


</div>
</body>
</html>
    ";
    }
}

?>