<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    
   // if($dp=='dept')
    $qry="delete from iq_gal_file where iq_gid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='iqac_gal_view.php';</script>";
?>