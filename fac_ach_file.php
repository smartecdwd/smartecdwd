<?php
    session_start();
    include "db_con.php";

    $fid=$_REQUEST['fid'];
    $dd=$_REQUEST['dd'];
    
   // if($dp=='dept')
    $qry="delete from fac_ach_file where fh_fid=".$fid;
        
    $res=mysqli_query($conn,$qry);
    echo "<script> window.location.href='fac_ach_edit.php?did=".$fid."&dd=".$dd."';</script>" ;
?>