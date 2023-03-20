<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    $nid=$_SESSION['nid1'];
    
   // if($dp=='dept')
    $qry="delete from notification_file where nfid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='noti_edit.php?nid=".$nid."';</script>";
?>