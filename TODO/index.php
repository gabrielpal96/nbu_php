<?php
session_start();
include 'db.php';
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
    <link rel="stylesheet" href="css/notes.css"/>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="main.js"></script>

</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar navbar-header">
            <a href="#" class="navbar-brand"><h4>G@b4oo</h4></a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="addTODO.php"><h4>ADD TO DO</h4></a> </li>


        </ul>
        <?php
        if (($_SESSION['uid'])==1){
            echo "
    <ul style='margin-left: 50px' class='nav navbar-nav'>
        <li><a href='admin.php'>Admin</a> </li>
    </ul>
    ";
        }
        ?>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><h4><span class="glyphicon glyphicon-user"></span>

                    <?php
                    echo "Hi, ";
                    echo $_SESSION["name"];
                    ?></h4></a>
            <ul class="dropdown-menu">
                    <li class="divider"></li>
                    <!--            <li><a href="" style="text-decoration: none;color: blue">Chnage Password</a></li>-->
                    <li class="divider"></li>
                    <li><a href="logout.php" style="text-decoration: none;color: blue">LOGOUT</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>
<p><br/></p>
<p><br/></p>
<p><br/></p>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <div class="nav nav-pills nav-stacked">
                <div id="get_category"></div>
            </div>
            <div class="nav nav-pills nav-stacked">
                <div id="get_brand"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12" id="product_msg">
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading"><h3  ><b>notes</b></h3></div>
                <div class="panel-body">
                    <div >
                        <?php
//                        add todo format
                        $uid=$_SESSION['uid'];
                        $product_query="SELECT * FROM todo WHERE user_id='$uid'";
                        $run_query=mysqli_query($con,$product_query);
                        $count=0;
                        $notes;
                        while ($row=mysqli_fetch_array($run_query)){
                            $notes[$count++]=$row;
                        }
                        if ($count!=0) {
                            $notes = array_reverse($notes);
                            echo "
                        	<div class=\"container bootstrap snippet\">
                                <div class=\"row\">
                                    <ul class=\"notes\">
                                    
                        ";

                            foreach ($notes as $row) {
                                $title = $row['title'];
                                $text = $row['text'];
                                $data = $row['date'];
                                $id=$row['TODO_id'];
                                echo "    <script>
        function myFunction() {

            var txt;
            var r = confirm(\"Сигурен ли си, че искаш да го изтриеш?\");
            if (r == true) {
                location.href =\"deleteProces.php?val='$id'\";
            } else {

            }
            
        }
                   
        
    </script>";
                                if (str_word_count($text)>30){
                                    $text= substr($text,0,200);
                                    $text.="...";
                                }

                                echo "
                            <li>
                            
                <div class=\"rotate-2 red-bg\">
                    <small>$data</small>
                    <h4>$title</h4>
                    <p>$text</p>
                    
                    <a href=\"#\" class=\"text-danger pull-right\"><i class=\"fa fa-trash-o \"></i></a>
                    
                </div>
                 <a onclick='myFunction()'   class=\"btn btn-primary a-btn-slide-text\">
       <span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span>
        <span><strong>Delete</strong></span>     
    </a>
     <a  href=\"editProces.php?val=$id\" class=\"btn btn-primary a-btn-slide-text\">
       <span class=\"glyphicon glyphicon-edit\" aria-hidden=\"true\"></span>
        <span><strong>Edit</strong></span>            
    </a>
    <a href='view.php?val=$id' class=\"btn btn-primary a-btn-slide-text\">
       <span class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></span>
        <span><strong>view</strong></span>     
    </a>
            </li>    
                            ";

                            }
                            echo "
                        	</ul>  
	</div>
</div>
                        ";
                        }
                        ?>

                    </div>

                </div>
                <div class="panel-footer">&copy;2018</div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>
</body>
</html>


