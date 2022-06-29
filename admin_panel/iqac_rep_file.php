<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['frid'];
    $rid=$_REQUEST['rid'];
    
   // if($dp=='dept')
    $qry="delete from iq_rep_file where iqr_fid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='iqac_rep_file1.php?rid=".$rid."';</script>";
?>