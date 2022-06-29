<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    $dd=$_REQUEST['dd'];
    
   // if($dp=='dept')
    $qry="delete from dep_med_file where dmfid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='dep_med_edit.php?did=".$fid."&dd=".$dd."';</script>";
    //header("location:dep_med_edit.php?did=".$fid);
?>