<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    $dd=$_REQUEST['dd'];
    
   // if($dp=='dept')
    $qry="delete from dep_prg_files where dpfid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='dep_prg_off_edit.php?did=".$fid."&did=".$dd."';</script>";
   // header("location:dep_prg_off_edit.php?did=".$fid);
?>