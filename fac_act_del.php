<?php
    include "db_con.php";
    
    $fid=$_REQUEST['fid'];
    
    $qry="delete from fac_act where faid=".$fid;
    
    $res=mysqli_query($conn,$qry);
    $qry="delete from fac_act_file where faid=".$fid;
    
    $res=mysqli_query($conn,$qry);
    header("location:fac_act.php");
?>