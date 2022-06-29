<?php
    session_start();
    include "db_con.php";

    $did=$_REQUEST['did'];
    $dp=$_REQUEST['dp'];
   
    $qry="delete from dep_class where dcid=".$did;
        
    $res=mysqli_query($conn,$qry);
    /*$qry="delete from dep_cou_file where dcid=".$did;
    $res=mysqli_query($conn,$qry);*/
    echo "<script>window.location.href='dep_class.php?did=".$dp."';</script>";
    //header("location:dep_fac.php");
?>