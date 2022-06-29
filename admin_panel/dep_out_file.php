<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    $dd=$_REQUEST['dd'];
   
    $qry="delete from dep_out_come_file where do_fid=".$fid;
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='dep_out_edit.php?did=".$fid."&did=".$dd."';</script>";
   
?>