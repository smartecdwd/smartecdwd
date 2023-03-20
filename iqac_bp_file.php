<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    
   // if($dp=='dept')
    $qry="delete from iq_bp_file where iq_bid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='iq_bp_edit.php';</script>";
?>