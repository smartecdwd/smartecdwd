<?php
    include "db_con.php";
    
    $fid=$_REQUEST['did'];
    
    $qry="delete from fac_ach where fhid=".$fid;
    //echo $qry;
    $res=mysqli_query($conn,$qry);
    $qry="delete from fac_ach_file where fhid=".$fid;
    $res=mysqli_query($conn,$qry);
    header("location:fac_ach.php");
?>