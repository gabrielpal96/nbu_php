<?php
include "db.php";
session_start();

if(isset($_POST["addToProduct"])){
    $p_id=$_POST["proId"];
    $user_id=$_SESSION["uid"];
    $sql="SELECT * FROM cart WHERE p_id='$p_id'AND user_id='$user_id'";
    $run_query=mysqli_query($con,$sql);
    $count=mysqli_num_rows($run_query);
    if ($count>0){
        echo "
            <div class='alert alert-warning'>
    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b>Product is added</b>
    </div>
            ";
    }else{
        $sql="SELECT * FROM products WHERE product_id='$p_id'";
        $run_query=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($run_query);
        $id=  $row["product_id"];
        $pro_name=$row["product_title"];
        $pro_image=$row["product_image"];
        $pro_price=$row["product_price"];

        $sql="INSERT INTO `cart` (`id`, `p_id`, `id_add`, `user_id`, `product_title`, `product_image`, `qtr`, `price`, `total_amount`)
                VALUES (NULL, '$p_id', '1', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price');";
        if (mysqli_query($con,$sql)){
            echo "
                   <div class='alert alert-success'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
                    <b> Product is added!!!</b>
                    </div>
            ";
        }


    }
}
if (isset($_POST["get_cart_product"]) || isset($_POST["cart_checkout"])){
    $uid=$_SESSION["uid"];
    $sql="SELECT * FROM cart WHERE user_id='$uid'";
    $run_query=mysqli_query($con,$sql);
    $count=mysqli_num_rows($run_query);
    if ($count>0){
        $no=1;
        $total_amt=0;
        while ($row=mysqli_fetch_array($run_query)){
            $id=$row["id"];
            $pro_id=  $row["p_id"];
            $pro_name=$row["product_title"];
            $pro_image=$row["product_image"];
            $qtr=$row["qtr"];
            $pro_price=$row["price"];
            $total=$row["total_amount"];

            $price_array=array($total);
            $total_sum=array_sum($price_array);
            $total_amt=$total_amt+$total_sum;
            if (isset($_POST["get_cart_product"])){
                echo "
                              <div class='row'>
                        <div class='col-md-3'>$no </div>
                        
                        <div class='col-md-3'>
                        <img src='product_images/$pro_image' width='60px' height='50px'/>
                        </div>
                        <div class='col-md-3'>$pro_name</div>
                        <div class='col-md-3'>$pro_price лв.</div>
                        
                    </div>
                    <hr/>
          ";
                $no=$no+1;
            }else{
//                $total=$qtr*$pro_price;
                echo "
                <div class=\"row\">
                        <div class=\"col-md-2\"><img src='product_images/$pro_image' width='60px' height='50px'></div>
                        <div class=\"col-md-2\">$pro_name</div>
                        <div class=\"col-md-2\"><input type='text' class=\"form-control price\" pid='$pro_id' id='price-$pro_id' ' value=\"$pro_price\" disabled></div>
                        <div class=\"col-md-2\"><input type='text' class=\"form-control qtr\" pid='$pro_id' id='qtr-$pro_id' value=\"$qtr\" ></div>
                        <div class=\"col-md-2\"><input type='text' class=\"form-control total\"  pid='$pro_id' id='total-$pro_id' value=\"$total\" disabled></div>
                        <div class=\"col-md-2\">
                            <div class=\"btn-group\">
                                <a href=\"#\" update_id='$pro_id' class=\"btn btn-primary update\"><span class=\"glyphicon glyphicon-ok-sign\"></span></a>
                                <a href=\"#\" remove_id='$pro_id'  class=\"btn btn-danger remove\"><span class=\"glyphicon glyphicon-trash\"></span></a>
                            </div>
                        </div>
                    </div>
                    <hr/>
                
                ";
            }

        }
        if (isset($_POST["cart_checkout"])){
            echo "
            <div class=\"row\">
          <div class=\"col-md-8\"></div>
          <div class=\"col-md-4\">
          <b>total: $total_amt лв.</b>
           </div>
     </div>
            ";
        }
    }
}
if (isset($_POST["removeFromCart"])){
    $pid= $_POST["removeId"];
    $uid=$_SESSION["uid"];
    $sql="DELETE FROM `cart` WHERE `cart`.`p_id` = $pid ";
    $run_query=mysqli_query($con,$sql);
    if ($run_query){
        echo "
          <div class='alert alert-success'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
                    <b> Product is REMOVED!!!</b>
                    </div>
        ";
    }
}

if (isset($_POST["updateProduct"])){
    $uid=$_SESSION["uid"];
    $pid= $_POST["updateId"];
    $qtr=$_POST["qtr"];
    $price=$_POST["price"];
    $total=$_POST["total"];
    $sql="UPDATE cart SET qtr='$qtr',price='$price',total_amount='$total' 
            WHERE user_id='$uid' AND p_id='$pid'";

    $run_query=mysqli_query($con,$sql);
    if ($run_query){
        echo "
          <div class='alert alert-success'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
                    <b> Product is UPDETED!!</b>
                    </div>
        ";
    }


}
?>