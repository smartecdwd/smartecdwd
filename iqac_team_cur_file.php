<?php
    session_start();
    include "db_con.php";
    
    $fid=$_REQUEST['fid'];
    
    $qry="update iq_team_cur set pimg=null where iq_cid=".$fid;
  
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='iqac_team_cur_edit.php?fid=$fid';</script>";
?>