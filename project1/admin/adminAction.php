<?php
include "..\db.php";
session_start();
if (isset($_POST["getUser"])){
    $product_query="SELECT * FROM user_info";
    $run_query=mysqli_query($con,$product_query);
    $no=1;
    if (mysqli_num_rows($run_query)>0){
        while ($row=mysqli_fetch_array($run_query)){
            $user_id=$row['user_id'];
            $user_fName=$row['first_name'];
            $user_lName=$row['last_name'];
            $user_email=$row['email'];
            echo "
                              <div class='row' style='height: 30px'>
                        <div class='col-md-2'>$no </div>
                        <div class='col-md-2'> $user_id</div>
                        <div class='col-md-2'> $user_fName</div>
                        <div class='col-md-2'>$user_lName</div>
                        <div class='col-md-2'> $user_email</div>
                       <div class='btn - group' >                 
            <a href = '#'  delete_id='$user_id'  class='btn btn-danger deleteUser' ><span class='glyphicon glyphicon-trash '  ></span ></a >
                            </div >                  
                    </div>
                    <hr/>
          ";
            $no=$no+1;
        }
    }
}

if (isset($_POST["removeUser"])){
    $user_id=$_POST["delete_id"];
    $sql="DELETE FROM `user_info` WHERE `user_info`.`user_id` = $user_id";
    $run_query=mysqli_query($con,$sql);
    echo "Delete user!!";

}

?>

