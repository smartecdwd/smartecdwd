<?php
    session_start();
    include "db_con.php";

    $did=$_REQUEST['did'];
    //$dp=$_REQUEST['dp'];
    
   // if($dp=='dept')
    $qry="delete from dep_mas where did=".$did;
        
    $res=mysqli_query($conn,$qry);
    $qry="delete from dep_mas_file where did=".$did;
    $res=mysqli_query($conn,$qry);
    header("location:dept_det.php");
?>