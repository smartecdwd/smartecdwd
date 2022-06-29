<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    
   // if($dp=='dept')
    $qry="delete from iq_ext_file where iq_eid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='iqac_ext_view.php';</script>";
?>