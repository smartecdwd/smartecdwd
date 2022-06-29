<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    
   // if($dp=='dept')
    $qry="delete from iq_nrif_file where iq_nid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='iqac_nrif_view.php';</script>";
?>