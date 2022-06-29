<?php
    session_start();
    include "db_con.php";

    $did=$_REQUEST['did'];
    $dp=$_REQUEST['dp'];
    //$dp=$_REQUEST['dp'];
    
   // if($dp=='dept')
    $qry="delete from dep_faci where dfid=".$did;
        
    $res=mysqli_query($conn,$qry);
    $qry="delete from dep_faci_file where dfid=".$did;
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='dep_fac.php?did=".$dp."';</script>";
    //header("location:dep_fac.php");
?>