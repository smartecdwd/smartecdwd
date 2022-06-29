<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    $dd=$_REQUEST['dd'];
    
   // if($dp=='dept')
    $qry="delete from dep_rank_file where drfid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='dep_rank_edit.php?did=".$fid."&dd=".$dd."';</script>";
    //header("location:dep_rank_edit.php?did=".$fid);
?>