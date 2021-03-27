<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_GET['id']))
          {
            $id=$_GET['id'];
             $query="delete from medicine_request where id='$id'";
                $run_sql=mysqli_query($con,$query);
                if($run_sql){
                  header("location:manage-medicine-request.php");
                }
                else{
                  echo "<script>alert('Error')</script>";
                }
            }

?>