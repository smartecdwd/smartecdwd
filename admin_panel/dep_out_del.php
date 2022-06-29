<?php
    session_start();
    include "db_con.php";

    $did=$_REQUEST['did'];
    $dp=$_REQUEST['dp'];
   
    $qry="delete from dep_out where doid=".$did;
        
    $res=mysqli_query($conn,$qry);
    $qry="delete from dep_out_file where doid=".$did;
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='dep_out.php?did=".$dp."';</script>";
    //header("location:dep_fac.php");
?>