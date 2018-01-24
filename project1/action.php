<?php
include "db.php";
session_start();
if(isset($_POST["category"])){
    $category_query="SELECT * FROM categories";
    $run_query=mysqli_query($con,$category_query);
    echo "
     <div class='nav nav-pills nav-stacked'>
                <li class='active'><a href='#'><h4>Categories</h4></a> </li>
    ";
    if(mysqli_num_rows($run_query)>0){
        while ($row=mysqli_fetch_array($run_query)){
           $cid=$row["cat_id"];
            $cat_name=$row["cat_title"];
            echo "
            <li><a href='#' class='category' cid='$cid'>$cat_name</a> </li>
            ";
        }
        echo "</div>";
    }
}

if(isset($_POST["brand"])){
    $brand_query="SELECT * FROM brands";
    $run_query=mysqli_query($con,$brand_query);
    echo "
     <div class='nav nav-pills nav-stacked'>
                <li class='active'><a href='#'><h4>Brands</h4></a> </li>
    ";
    if(mysqli_num_rows($run_query)>0){
        while ($row=mysqli_fetch_array($run_query)){
            $bid=$row["brand_id"];
            $brand_name=$row["brand_title"];
            echo "
            <li><a href='#' class='selectBrand' bid='$bid' >$brand_name</a> </li>
            ";
        }
        echo "</div>";
    }
}
if (isset($_POST["getProduct"])){
    $product_query="SELECT * FROM products";
    $run_query=mysqli_query($con,$product_query);
    if (mysqli_num_rows($run_query)>0){
        while ($row=mysqli_fetch_array($run_query)){
            $pro_id=$row['product_id'];
            $pro_cat=$row['product_cat'];
            $pro_brand=$row['proct_brand'];
            $pro_title=$row['product_title'];
            $pro_price=$row['product_price'];
            $pro_image=$row['product_image'];
echo "
                    <div class='col-md-4'>
                        <div class='panel panel-info'>
                            <div class='panel-heading'> $pro_title</div>
                            <div class='panel-body'>
                                <img style='height: 300px;width: 300px;' src='product_images/$pro_image'/>
                            </div>
                            <div class='panel-heading'>$pro_price лв.";

            if (isset($_SESSION["uid"])){
                echo "
                            <button pid='$pro_id  ' style='float:right' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
                            ";
            }

    echo "
                            </div>
                        </div>
                    </div>
";
        }
    }
}
if (isset($_POST["get_seleted_category"]) || isset($_POST["selectBrand"]) || isset($_POST["search"]) ){

    if (isset($_POST["get_seleted_category"])){
        $id=$_POST["cat_id"];
        $sql="SELECT * from products WHERE product_cat='$id' ";
    }else if (isset($_POST["selectBrand"])){
        $id=$_POST["brand_id"];
        $sql="SELECT * FROM products WHERE proct_brand='$id' ";
    }else{
        $keyword=$_POST["keyword"];
        $sql="SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'";

    }

    $run_query=mysqli_query($con,$sql);

    while ($row=mysqli_fetch_array($run_query)){
        $pro_id=$row['product_id'];
        $pro_cat=$row['product_cat'];
        $pro_brand=$row['proct_brand'];
        $pro_title=$row['product_title'];
        $pro_price=$row['product_price'];
        $pro_image=$row['product_image'];
        echo "
                    <div class='col-md-4'>
                        <div class='panel panel-info'>
                            <div class='panel-heading'> $pro_title</div>
                            <div class='panel-body'>
                                <img style='height: 300px;width: 300px;' src='product_images/$pro_image'/>
                            </div>
                            <div class='panel-heading'>$pro_price
                            <button pid='$pro_id  ' style='float:right' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
                            </div>
                        </div>
                    </div>
";
    }
}
//if(isset($_POST["addToProduct"])){
//    $p_id=$_POST["proId"];
//    $user_id=$_SESSION["uid"];
//    $sql="SELECT * FROM cart WHERE p_id='$p_id'AND user_id='$user_id'";
//    $run_query=mysqli_query($con,$sql);
//    $count=mysqli_num_rows($run_query);
//    if ($count>0){
//        echo "
//            <div class='alert alert-warning'>
//    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a><b>veche e dobaven</b>
//    </div>
//            ";
//    }else{
//    $sql="SELECT * FROM products WHERE product_id='$p_id'";
//    $run_query=mysqli_query($con,$sql);
//    $row=mysqli_fetch_array($run_query);
//        $id=  $row["product_id"];
//        $pro_name=$row["product_title"];
//        $pro_image=$row["product_image"];
//        $pro_price=$row["product_price"];
//
//        $sql="INSERT INTO `cart` (`id`, `p_id`, `id_add`, `user_id`, `product_title`, `product_image`, `qtr`, `price`, `total_amount`)
//                VALUES (NULL, '$p_id', '1', '$user_id', '$pro_name', '$pro_image', '1', '$pro_price', '$pro_price');";
//        if (mysqli_query($con,$sql)){
//            echo "
//                   <div class='alert alert-success'>
//                    <a href='#' class='close' data-dismiss='alert' aria-label='close'></a>
//                    <b> Product is added!!!</b>
//                    </div>
//            ";
//        }
//
//
//    }
//}
//if (isset($_POST["get_cart_product"])){
//    $uid=$_SESSION["uid"];
//    $sql="SELECT * FROM cart WHERE user_id='$uid'";
//    $run_query=mysqli_query($con,$sql);
//    $count=mysqli_num_rows($run_query);
//    if ($count>0){
//        $no=1;
//        while ($row=mysqli_fetch_array($run_query)){
//            $id=$row["id"];
//            $pro_id=  $row["p_id"];
//            $pro_name=$row["product_title"];
//            $pro_image=$row["product_image"];
//            $pro_price=$row["price"];
//          echo "
//                              <div class='row'>
//                        <div class='col-md-3'>$no </div>
//
//                        <div class='col-md-3'>
//                        <img src='product_images/$pro_image' width='60px' height='50px'/>
//                        </div>
//                        <div class='col-md-3'>$pro_name</div>
//                        <div class='col-md-3'>$pro_price лв.</div>
//
//                    </div>
//                    <hr/>
//          ";
//          $no=$no+1;
//        }
//    }
//}

//if  (isset($_POST["cart_checkout"])){
//
//}

?>










