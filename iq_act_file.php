<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    $dd=$_REQUEST['dd'];
    
   // if($dp=='dept')
    $qry="delete from iq_act_file where iqac_fid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='iq_act_edit.php';</script>";
?>