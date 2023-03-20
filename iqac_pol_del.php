<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    
   // if($dp=='dept')
    $qry="delete from iq_pol_file where iq_oid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='iqac_pol_view.php';</script>";
?>