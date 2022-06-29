<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    $dd=$_REQUEST['dd'];
    
   // if($dp=='dept')
    $qry="delete from dep_app_file where dal_fid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='dep_app_edit.php?did=".$fid."&did=".$dd."';</script>";
?>