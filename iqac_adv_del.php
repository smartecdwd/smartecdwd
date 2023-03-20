<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['qid'];
    
   // if($dp=='dept')
    $qry="delete from iq_adv_file where iq_adid=".$fid;
    $res=mysqli_query($conn,$qry);
    
    $qry="delete from iq_adv where iq_adid=".$fid;
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='';</script>";
?>