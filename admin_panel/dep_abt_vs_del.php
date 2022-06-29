<?php
    session_start();
    include "db_con.php";

    $did=$_REQUEST['did'];
    $dp=$_REQUEST['dp'];
   
    $qry="delete from dep_vis where did=".$did;
        
    $res=mysqli_query($conn,$qry);
   /* $qry="delete from dep_adm_file where dapid=".$did;
    $res=mysqli_query($conn,$qry);*/
    echo "<script>window.location.href='dep_abt_vis.php?did=".$did."';</script>";
    //header("location:dep_fac.php");
?>