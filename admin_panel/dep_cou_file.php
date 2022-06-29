<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    $dd=$_REQUEST['dd'];
   
    $qry="delete from dep_cou_file where dc_fid=".$fid;
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='dep_cou_edit.php?did=".$fid."&did=".$dd."';</script>";
   
?>