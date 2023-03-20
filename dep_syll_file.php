<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    $dd=$_REQUEST['dd'];
    
   // if($dp=='dept')
    $qry="delete from dep_syl_file where ds_fid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='dep_syll_edit.php?did=".$fid."&did=".$dd."';</script>";
?>