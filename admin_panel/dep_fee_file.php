<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    $dd=$_REQUEST['dd'];
    
    $qry="select * from dep_fee_file where dfs_fid=".$fid;
    $res=mysqli_query($conn,$qry);
    while($row==mysqli_fetch_array($res))
    {
        unlink("'dept/fee/".$row["fname"]."'");
    }
    
    $qry="delete from dep_fee_file where dfs_fid=".$fid;
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='dep_fee_edit.php?did=".$fid."&did=".$dd."';</script>";
   
?>