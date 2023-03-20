<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    
   // if($dp=='dept')
    $qry="delete from iq_prg_file where iq_pid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script>window.location.href='iq_prg_edit.php';</script>";
?>